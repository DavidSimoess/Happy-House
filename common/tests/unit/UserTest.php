<?php namespace common\tests;

use common\models\User;

class UserTest extends \Codeception\Test\Unit
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


    /*public function testValidacoes(){
        $user = new User();

        $user->username = 'gsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeg';
        $this->tester->assertFalse($user->validate('username'));

        $user->username = 'testes';
        $this->tester->assertTrue($user->validate('username'));

        $user->telemovel = 9123454898989898989898989898989;
        $this->tester->assertFalse($user->validate('telemovel'));

        $user->telemovel = 912345678;
        $this->tester->assertTrue($user->validate('telemovel'));

        $user->nif = 91234567848948948948989;
        $this->tester->assertFalse($user->validate('nif'));

        $user->nif = 912345678;
        $this->tester->assertTrue($user->validate('nif'));

        $user->email = 'gsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeggsegsegsgesgegesggsegegsgsgegeg';
        $this->tester->assertFalse($user->validate('email'));

        $user->email = 'testeewfgefgwef@gmail.com';
        $this->tester->assertTrue($user->validate('email'));
    }*/

    // tests
    public function testCreateUser()
    {
        $user = new User();
        $user->username = 'testeUser';
        $user->telemovel = 912345678;
        $user->nif = 123456789;
        $user->favoritos = NULL;
        $user->email = 'testeUser@gmail.com';
        $user->setPassword('12345678');
        $user->status = 10;
        $user->save();
        $this->tester->seeInDatabase('user', ['username' => 'testeUser']);
    }

    public function testUpdateUser()
    {
        $user = $this->tester->grabRecord('app\models\User', ['username' => 'testeUser']);

        //$user = User::find($id);
        $user->username = 'Olga';
        $user->save();

        $this->tester->seeRecord('app\models\User', ['nome' => 'Olga']);
        $this->tester->dontSeeRecord('app\models\User', ['nome' => 'testeUser']);
    }


    public function testDeleteUser()
    {
        $user = $this->tester->grabRecord('app\models\User', ['nome' => 'Olga']);

        $user->delete();

        $this->tester->dontSeeRecord('app\models\User', ['nome' => 'Olga']);
    }
}