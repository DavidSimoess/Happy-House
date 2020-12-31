<?php

namespace common\models;

use yii;

/**
 * This is the model class for table "imovel".
 *
 * @property int $id
 * @property string $estado
 * @property int $area
 * @property int $n_quartos
 * @property int $n_wc
 * @property float $preco
 * @property string $descricao
 * @property int $garagem
 * @property int $piso
 * @property string $morada
 * @property string $codigo_postal
 * @property string $cidade
 * @property float $latitude
 * @property float $longitude
 * @property int $id_user
 *
 * @property Aluguer[] $aluguers
 * @property Imagens[] $imagens
 * @property User $user
 * @property Pedido[] $pedidos
 * @property Venda[] $vendas
 */
class Imovel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'imovel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['estado', 'area', 'n_quartos', 'n_wc', 'preco', 'descricao', 'garagem', 'piso', 'morada', 'codigo_postal', 'cidade', 'latitude', 'longitude', 'id_user'], 'required'],
            [['area', 'n_quartos', 'n_wc', 'garagem', 'piso', 'id_user'], 'integer'],
            [['preco', 'latitude', 'longitude'], 'number'],
            [['estado'], 'string', 'max' => 50],
            [['descricao', 'morada'], 'string', 'max' => 500],
            [['codigo_postal'], 'string', 'max' => 8],
            [['cidade'], 'string', 'max' => 20],
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
            'estado' => 'Estado',
            'area' => 'Area',
            'n_quartos' => 'N Quartos',
            'n_wc' => 'N Wc',
            'preco' => 'Preco',
            'descricao' => 'Descricao',
            'garagem' => 'Garagem',
            'piso' => 'Piso',
            'morada' => 'Morada',
            'codigo_postal' => 'Codigo Postal',
            'cidade' => 'Cidade',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'id_user' => 'Id User',
        ];
    }

    /**
     * Gets query for [[Aluguers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAluguers()
    {
        return $this->hasMany(Aluguer::className(), ['id_imovel' => 'id']);
    }

    /**
     * Gets query for [[Imagens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImagens()
    {
        return $this->hasMany(Imagens::className(), ['id_Imovel' => 'id']);
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
     * Gets query for [[Pedidos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedido::className(), ['id_imovel' => 'id']);
    }

    /**
     * Gets query for [[Vendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendas()
    {
        return $this->hasMany(Venda::className(), ['id_imovel' => 'id']);
    }
}
