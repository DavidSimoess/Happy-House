<?php namespace frontend\tests\acceptance;
use frontend\tests\AcceptanceTester;

class TesteAceitacaoCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->wait(5);
        $I->click('Login');
        $I->wait(5);
        $I->fillField('Username', 'admin');
        $I->fillField('Password', '123456789');
        $I->click('login-button');
        $I->wait(5);
        $I->see('Logout (admin)');
    }
}

