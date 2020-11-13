<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "utilizador".
 *
 * @property int $id
 * @property string $nome
 * @property int $telemovel
 * @property int $nif
 * @property string $email
 * @property int $favoritos
 */
class Utilizador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utilizador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'telemovel', 'nif', 'email', 'favoritos'], 'required'],
            [['telemovel', 'nif', 'favoritos'], 'integer'],
            [['nome'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'telemovel' => 'Telemovel',
            'nif' => 'Nif',
            'email' => 'Email',
            'favoritos' => 'Favoritos',
        ];
    }
}
