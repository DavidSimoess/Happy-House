<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class tabsCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('http://localhost/happyhouse/frontend/web/index.php?r=site%2Findex');
        $I->see('Encontre uma casa hoje!');
        $I->click('Comprar');
        $I->see('Agende uma reunião com um dos nossos agentes.');
        $I->click('Sobre');
        $I->see('A nossa experiência');
        $I->click('Contactos');
        $I->see('Entra em contacto conosco!');
    }
}
