<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedido".
 *
 * @property int $id
 * @property string $estado
 * @property string $data
 * @property int $id_user
 * @property int $id_imovel
 *
 * @property User $user
 * @property Imovel $imovel
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedido';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['estado', 'data', 'id_user', 'id_imovel'], 'required'],
            [['id_user', 'id_imovel'], 'integer'],
            [['estado'], 'string', 'max' => 50],
            [['data'], 'safe'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_imovel'], 'exist', 'skipOnError' => true, 'targetClass' => Imovel::className(), 'targetAttribute' => ['id_imovel' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estado' => 'Estado',
            'data' => 'Data',
            'id_user' => 'Id User',
            'id_imovel' => 'Id Imovel',
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

    /**
     * Gets query for [[Imovel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImovel()
    {
        return $this->hasOne(Imovel::className(), ['id' => 'id_imovel']);
    }
}
