<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class SaberMaisCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('http://localhost/happyhouse/frontend/web/index.php?r=site%2Findex');
        $I->see('Saiba mais');
        $I->click('Saiba mais');
        $I->see('SOBRE NÓS');
    }
}
