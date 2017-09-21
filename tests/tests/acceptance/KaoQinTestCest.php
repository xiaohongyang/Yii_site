<?php


class KaoQinTestCest
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

        $loginUrl = "http://kaoqin.adsage.com/iclock/accounts/login/";
//        $I->amGoingTo("http://kaoqin.adsage.com/iclock/accounts/login/");

        $I->amOnUrl($loginUrl);
        $I->see("用户名");
        $I->wantTo("input[id=id_username]");
//        $I->fillField(['name' => 'username'], '981');
        $I->fillField(['id' => 'id_username'], '981');
        $I->fillField('input[name=password]', '321');

        $I->click('input[id=id_login_btn]');
//

        $I->
        $a = $I->seeCookie('sessionid');
        $a = $I->seeCookie('yunsuo_session_verify');

        echo "<<<<<<" .$a ."<<<<<<<!!!!";
        echo ">>>>>>";

//        $I->amOnUrl("http://kaoqin.adsage.com/iclock/staff/");
//        $I->wantTo('div[id=n_transaction]');
//        $I->see('考勤数据');

//        $I->amOnUrl("http://baidu.com/");
//        $I->wantTo("把百度设为主页");
//        $I->fillField('input[name=username', '981');
//        $I->fillField('input[name=password', '321');
//        $I->click('input[value=登录]');
//
//        $I->see('肖红阳');

    }
}
