<?php namespace common\tests;

use common\models\Aluguer;

class AluguerTest extends \Codeception\Test\Unit
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
        $aluguer = new Aluguer();

        $aluguer->preco = 'gyhuefyhuyhuhuidhuidfuidhfdhufsdihdifsuifhisdhfsdifsuifhsdfhihfsdfhsifisf';
        $this->tester->assertFalse($aluguer->validate('preco'));

        $aluguer->preco = '200000';
        $this->tester->assertTrue($aluguer->validate('preco'));


    }

    public function testCreateAluguer()
    {
        $aluguer = new Aluguer();
        $aluguer->preco = 999999;
        $aluguer->id_imovel = 2;
        $aluguer->save();
        $this->tester->seeInDatabase('aluguer', ['preco' => 999999]);
    }

    public function testUpdateAluguer()
    {
        $aluguer = $this->tester->grabRecord('app\models\Aluguer', ['preco' => 999999]);

        $aluguer->preco = 888888;
        $aluguer->save();

        $this->tester->seeRecord('app\models\Aluguer', ['preco' => 888888]);
        $this->tester->dontSeeRecord('app\models\Aluguer', ['preco' => 999999]);
    }


    public function testDeleteAluguer()
    {
        $aluguer = $this->tester->grabRecord('app\models\Aluguer', ['preco' => 888888]);

        $aluguer->delete();

        $this->tester->dontSeeRecord('app\models\Aluguer', ['preco' => 888888]);
    }
}