<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class SignupCest
{
    protected $formId = '#form-signup';


    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('site/signup');
    }


    public function signupSuccessfully(FunctionalTester $I)
    {
        $I->submitForm($this->formId, [
            'SignupForm[username]' => 'Teste',
            'SignupForm[email]' => 'teste@gmail.com',
            'SignupForm[password]' => 123456789,
            'SignupForm[telemovel]' => 912345678,
            'SignupForm[nif]' => 456123789,
        ]);

        $I->seeRecord('common\models\User', [
            'username' => 'Teste',
            'email' => 'teste@gmail.com',
        ]);

    }
}
