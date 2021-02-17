<?php

namespace common\models;

use yii;

/**
 * This is the model class for table "recurso".
 *
 * @property int $id
 * @property string $categoria
 * @property string $mensagem
 * @property string $email
 * @property int $id_user
 *
 * @property User $user
 */
class Recurso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recurso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoria', 'mensagem', 'email', 'id_user'], 'required'],
            [['id_user'], 'integer'],
            [['categoria', 'mensagem', 'email'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categoria' => 'Categoria',
            'mensagem' => 'Mensagem',
            'email' => 'Email',
            'id_user' => 'Id User',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
