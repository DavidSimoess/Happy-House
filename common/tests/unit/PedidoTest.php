<?php namespace common\tests;

use common\models\Pedido;

class PedidoTest extends \Codeception\Test\Unit
{
    /**
     * @var \common\tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testValidacoes(){
        $pedido = new Pedido();

        $pedido->estado = 'gyhuefyhuyhuhuidhuidfuidhfdhufsdihdifsuifhisdhfsdifsuifhsdfhihfsdfhsifisf';
        $this->tester->assertFalse($pedido->validate('estado'));

        $pedido->estado = 'fefefefefefefef';
        $this->tester->assertTrue($pedido->validate('estado'));
    }

    public function testCreatePedido()
    {
        $pedido = new Pedido();
        $pedido->estado = 'EstadoPersonalizado';
        $pedido->id_user = 1;
        $pedido->id_imovel = 2;
        $pedido->save();
        $this->tester->seeInDatabase('pedido', ['estado' => 'EstadoPersonalizado']);
    }

    public function testUpdatePedido()
    {
        $pedido = $this->tester->grabRecord('app\models\Pedido', ['estado' => 'EstadoPersonalizado']);

        $pedido->estado = 'EstadoPersonalizadoAlterado';
        $pedido->save();

        $this->tester->seeRecord('app\models\Pedido', ['estado' => 'EstadoPersonalizadoAlterado']);
        $this->tester->dontSeeRecord('app\models\Pedido', ['estado' => 'EstadoPersonalizado']);
    }


    public function testDeletePedido()
    {
        $pedido = $this->tester->grabRecord('app\models\Pedido', ['estado' => 'EstadoPersonalizadoAlterado']);

        $pedido->delete();

        $this->tester->dontSeeRecord('app\models\Pedido', ['estado' => 'EstadoPersonalizadoAlterado']);
    }
}