<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "imagens".
 *
 * @property int $id
 * @property string $imagem
 * @property int $id_Imovel
 *
 * @property Imovel $imovel
 */
class Imagens extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'imagens';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imagem', 'id_Imovel'], 'required'],
            [['id_Imovel'], 'integer'],
            [['imagem'], 'string', 'max' => 200],
            [['id_Imovel'], 'exist', 'skipOnError' => true, 'targetClass' => Imovel::className(), 'targetAttribute' => ['id_Imovel' => 'id']],
            [['imagem'], 'file', 'extensions' => 'jpg,jpeg,png', 'skipOnEmpty' => false, 'maxFiles' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imagem' => 'Imagem',
            'id_Imovel' => 'Id Imovel',
        ];
    }

    /**
     * Gets query for [[Imovel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImovel()
    {
        return $this->hasOne(Imovel::className(), ['id' => 'id_Imovel']);
    }
}
