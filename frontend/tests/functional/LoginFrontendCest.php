<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class LoginFrontendCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('http://localhost/happyhouse/frontend/web/index.php?r=site%2Flogin');
        $I->see('Por favor preencha os campos para realizar o login');
        $I->fillField('Username', 'admin');
        $I->fillField('Password', '123456789');
        $I->click('login-button');
        $I->see('Logout (admin)');
    }
}
