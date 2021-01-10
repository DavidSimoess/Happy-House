<?php namespace common\tests;

use common\models\Imovel;

class ImovelTest extends \Codeception\Test\Unit
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
        $imovel = new Imovel();

        $imovel->estado = 'gyhuefyhuyhuhuidhuidfuidhfdhufsdihdifsuifhisdhfsdifsuifhsdfhihfsdfhsifisf';
        $this->tester->assertFalse($imovel->validate('estado'));

        $imovel->estado = 'fefefefefefefef';
        $this->tester->assertTrue($imovel->validate('estado'));

        $imovel->area = 'gyhuefyhuyhuhuidhuidfuidhfdhufsdihdifsuifhisdhfsdifsuifhsdfhihfsdfhsifisf';
        $this->tester->assertFalse($imovel->validate('area'));

        $imovel->area = 200;
        $this->tester->assertTrue($imovel->validate('area'));

        $imovel->n_quartos = 'gyhuefyhuyhuhuidhuidfuidhfdhufsdihdifsuifhisdhfsdifsuifhsdfhihfsdfhsifisf';
        $this->tester->assertFalse($imovel->validate('n_quartos'));

        $imovel->n_quartos = 200;
        $this->tester->assertTrue($imovel->validate('n_quartos'));

        $imovel->n_wc = 'gyhuefyhuyhuhuidhuidfuidhfdhufsdihdifsuifhisdhfsdifsuifhsdfhihfsdfhsifisf';
        $this->tester->assertFalse($imovel->validate('n_wc'));

        $imovel->n_wc = 200;
        $this->tester->assertTrue($imovel->validate('n_wc'));

        $imovel->preco = 'gyhuefyhuyhuhuidhuidfuidhfdhufsdihdifsuifhisdhfsdifsuifhsdfhihfsdfhsifisf';
        $this->tester->assertFalse($imovel->validate('preco'));

        $imovel->preco = 200000;
        $this->tester->assertTrue($imovel->validate('preco'));

        $imovel->descricao = 'gsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeg';
        $this->tester->assertFalse($imovel->validate('descricao'));

        $imovel->descricao = 'drgrgrgrgrgr';
        $this->tester->assertTrue($imovel->validate('descricao'));

        $imovel->garagem = 'tyftyftgy';
        $this->tester->assertFalse($imovel->validate('garagem'));

        $imovel->garagem = 2;
        $this->tester->assertTrue($imovel->validate('garagem'));

        $imovel->piso = 'tyftyftgy';
        $this->tester->assertFalse($imovel->validate('piso'));

        $imovel->piso = 2;
        $this->tester->assertTrue($imovel->validate('piso'));

        $imovel->morada = 'gsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeg';
        $this->tester->assertFalse($imovel->validate('morada'));

        $imovel->morada = 'drgrgrgrgrgr';
        $this->tester->assertTrue($imovel->validate('morada'));

        $imovel->codigo_postal = 'gyhuefyhuyhuhuidhuidfuidhfdhufsdihdifsuifhisdhfsdifsuifhsdfhihfsdfhsifisf';
        $this->tester->assertFalse($imovel->validate('codigo_postal'));

        $imovel->codigo_postal = '1234-321';
        $this->tester->assertTrue($imovel->validate('codigo_postal'));

        $imovel->cidade = 'gyhuefyhuyhuhuidhuidfuidhfdhufsdihdifsuifhisdhfsdifsuifhsdfhihfsdfhsifisf';
        $this->tester->assertFalse($imovel->validate('cidade'));

        $imovel->cidade = 'Cidade';
        $this->tester->assertTrue($imovel->validate('cidade'));

        $imovel->latitude = 'gyhuefyhuyhuhuidhuidfuidhfdhufsdihdifsuifhisdhfsdifsuifhsdfhihfsdfhsifisf';
        $this->tester->assertFalse($imovel->validate('latitude'));

        $imovel->latitude = 16;
        $this->tester->assertTrue($imovel->validate('latitude'));

        $imovel->longitude = 'gyhuefyhuyhuhuidhuidfuidhfdhufsdihdifsuifhisdhfsdifsuifhsdfhihfsdfhsifisf';
        $this->tester->assertFalse($imovel->validate('longitude'));

        $imovel->longitude = 16;
        $this->tester->assertTrue($imovel->validate('longitude'));
    }

    public function testCreateImovel()
    {
        $imovel = new Imovel();
        $imovel->estado = 'Novo';
        $imovel->area = 200;
        $imovel->n_quartos = 4;
        $imovel->n_wc= 3;
        $imovel->preco = 200000;
        $imovel->descricao = 'testeunitario';
        $imovel->garagem = 1;
        $imovel->piso = 2;
        $imovel->morada = 'efgefefe';
        $imovel->codigo_postal = '1234-321';
        $imovel->cidade = 'fefefefef';
        $imovel->latitude = 16;
        $imovel->longitude = 16;
        $imovel->id_user = 1;
        $imovel->save();
        $this->tester->seeInDatabase('imovel', ['descricao' => 'testeunitario']);
    }

    public function testUpdateImovel()
    {
        $imovel = $this->tester->grabRecord('app\models\Imovel', ['descricao' => 'testeunitario']);

        $imovel->descricao = 'testeunitarioAlterado';
        $imovel->save();

        $this->tester->seeRecord('app\models\Imovel', ['descricao' => 'testeunitarioAlterado']);
        $this->tester->dontSeeRecord('app\models\Imovel', ['descricao' => 'testeunitario']);
    }


    public function testDeleteImovel()
    {
        $imovel = $this->tester->grabRecord('app\models\Imovel', ['descricao' => 'testeunitarioAlterado']);

        $imovel->delete();

        $this->tester->dontSeeRecord('app\models\Imovel', ['descricao' => 'testeunitarioAlterado']);
    }
}