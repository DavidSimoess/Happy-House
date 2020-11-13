<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "aluguer".
 *
 * @property int $id
 * @property string $data_inicio
 * @property string $data_fim
 * @property float $preco
 * @property int $id_imovel
 */
class Aluguer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aluguer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data_inicio', 'data_fim', 'preco', 'id_imovel'], 'required'],
            [['data_inicio', 'data_fim'], 'safe'],
            [['preco'], 'number'],
            [['id_imovel'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data_inicio' => 'Data Inicio',
            'data_fim' => 'Data Fim',
            'preco' => 'Preco',
            'id_imovel' => 'Id Imovel',
        ];
    }
}
