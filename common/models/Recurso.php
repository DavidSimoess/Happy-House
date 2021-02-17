<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "recurso".
 *
 * @property int $id
 * @property string $categoria
 * @property string $mensagem
 * @property string $email
 * @property string $data
 * @property int $visto
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
            [['categoria'], 'string'],
            [['mensagem', 'email', 'data', 'visto', 'id_user'], 'required'],
            [['data'], 'safe'],
            [['visto', 'id_user'], 'integer'],
            [['mensagem', 'email'], 'string', 'max' => 255],
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
            'data' => 'Data',
            'visto' => 'Visto',
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
