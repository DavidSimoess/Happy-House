<?php

namespace common\models;

use Yii;

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
 * @property int $id_utilizador
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
            [['estado', 'area', 'n_quartos', 'n_wc', 'preco', 'descricao', 'garagem', 'piso', 'morada', 'codigo_postal', 'cidade', 'id_utilizador'], 'required'],
            [['area', 'n_quartos', 'n_wc', 'garagem', 'piso', 'id_utilizador'], 'integer'],
            [['preco'], 'number'],
            [['estado'], 'string', 'max' => 50],
            [['descricao', 'morada'], 'string', 'max' => 500],
            [['codigo_postal'], 'string', 'max' => 8],
            [['cidade'], 'string', 'max' => 20],
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
            'id_utilizador' => 'Id Utilizador',
        ];
    }
}
