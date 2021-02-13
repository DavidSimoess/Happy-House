<?php
namespace frontend\models;

use common\models\Pedido;
use Yii;
use yii\base\Model;

class PedidoForm extends Model
{
    public $data;
    public $mensagem;
    public $estado;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data', 'mensagem'], 'required'],
        ];
    }

    public function enviarPedido($id)
    {
        if ($this->validate()) {

            $pedido = new Pedido();
            $pedido->data = $this->data;
            $pedido->mensagem = $this->mensagem;
            $pedido->estado = false;
            $pedido->id_user = Yii::$app->user->getId();
            $pedido->id_imovel = $id;
            $pedido->save(false);


            return $pedido;
        }
        return null;
    }



}
