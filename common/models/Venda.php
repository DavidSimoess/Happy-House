<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "venda".
 *
 * @property int $id
 * @property float $preco
 * @property string $data_venda
 * @property int $id_imovel
 *
 * @property Imovel $imovel
 */
class Venda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'venda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['preco', 'data_venda', 'id_imovel'], 'required'],
            [['preco'], 'number'],
            [['data_venda'], 'safe'],
            [['id_imovel'], 'integer'],
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
            'preco' => 'Preco',
            'data_venda' => 'Data Venda',
            'id_imovel' => 'Id Imovel',
        ];
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
