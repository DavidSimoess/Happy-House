<?php
namespace frontend\models;

use common\models\Recurso;
use Yii;
use yii\base\Model;

class RecursoForm extends Model
{

    public $categoria;
    public $mensagem;
    public $email;


    public function rules()
    {
        return [
            [['categoria', 'mensagem','email'], 'required'],
        ];
    }


    public function enviarRecurso()
    {
        if ($this->validate()) {

            $recurso = new Recurso();
            $recurso->categoria = $this->categoria;
            $recurso->mensagem = $this->mensagem;
            $recurso->email = $this->email;
            $recurso->id_user = Yii::$app->user->getId();
            $recurso->save(false);


            return $recurso;
        }
        return null;
    }
}