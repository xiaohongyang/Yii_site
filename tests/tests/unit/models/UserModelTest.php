<?php
namespace models;


use app\models\LoginForm;
use app\models\UserModel;

class UserModelTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {

    }

    public function testLogin(){

        $model = new LoginForm();
        $_POST = [
            'mobile' => 15995716443,
            'code' => '321',
            'verify_code' => '8888'
        ];
        $rs = $model->login();

        $this->assertEquals($rs, true, \Yii::$app->session->getFlash('message'));
    }
}