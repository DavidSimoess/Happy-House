<?php namespace common\tests;

use common\models\Venda;

class VendaTest extends \Codeception\Test\Unit
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
        $venda = new Venda();

        $venda->preco = 'gyhuefyhuyhuhuidhuidfuidhfdhufsdihdifsuifhisdhfsdifsuifhsdfhihfsdfhsifisf';
        $this->tester->assertFalse($venda->validate('preco'));

        $venda->preco = '200000';
        $this->tester->assertTrue($venda->validate('preco'));


    }

    public function testCreateVenda()
    {
        $venda = new Venda();
        $venda->preco = 999999;
        $venda->id_imovel = 2;
        $venda->save();
        $this->tester->seeInDatabase('venda', ['preco' => 999999]);
    }

    /*public function testUpdateVenda()
    {
        $pedido = $this->tester->grabRecord('app\models\Venda', ['preco' => 999999]);

        $pedido->preco = 888888;
        $pedido->save();

        $this->tester->seeRecord('app\models\Venda', ['preco' => 888888]);
        $this->tester->dontSeeRecord('app\models\Venda', ['preco' => 999999]);
    }


    public function testDeleteVenda()
    {
        $pedido = $this->tester->grabRecord('app\models\Venda', ['preco' => 888888]);

        $pedido->delete();

        $this->tester->dontSeeRecord('app\models\Venda', ['preco' => 888888]);
    }*/
}