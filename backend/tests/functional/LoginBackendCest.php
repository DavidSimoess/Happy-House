<?php namespace backend\tests\functional;
use backend\tests\FunctionalTester;

class LoginBackendCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('http://localhost/happyhouse/backend/web/index.php?r=site%2Flogin');
        $I->fillField('Username', 'admin');
        $I->fillField('Password', '123456789');
        $I->click('login-button');
        $I->see('Logout (admin)');
        $I->dontSeeLink('Login');
        $I->dontSeeLink('Signup');
    }
}
