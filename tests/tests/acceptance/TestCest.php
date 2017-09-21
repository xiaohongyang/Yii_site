<?php

use yii\helpers\Url as Url;
class TestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {

        $I->amOnPage(Url::toRoute(['/site/login']));
        $I->see('获取验证码');
        $I->see('共享');
        $I->wantTo('mobile');
        $I->see('mobile');
        $I->fillField('input[name=mobile]', '15995716443');
        $I->fillField('input[name=code]', '321');
        $I->click("input[type=submit]");
        $I->wantTo('15995716443');
//        $I->wait(2); // wait for button to be clicked
//
//        $I->expectTo('see user info');
//        $I->see('Logout');
//        $I->fillField('input[name="mobile"]', '15995716443');
//        $I->fillField('input[name="code"]', '33');
//        $I->click("#form input[type=submit]");

        echo 33;
    }
}
