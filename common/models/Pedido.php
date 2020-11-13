<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedido".
 *
 * @property int $id
 * @property string $estado
 * @property int $id_utiluizador
 * @property int $id_imovel
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
            [['estado', 'id_utiluizador', 'id_imovel'], 'required'],
            [['id_utiluizador', 'id_imovel'], 'integer'],
            [['estado'], 'string', 'max' => 50],
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
            'id_utiluizador' => 'Id Utiluizador',
            'id_imovel' => 'Id Imovel',
        ];
    }
}
