<?php
namespace models;


use app\modules\admin\models\AdminModel;

class AdminModelTest extends \Codeception\Test\Unit
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

    public function testCreate(){
        $model = new AdminModel();
        $userData = [
            'username' => 'admin',
            'password' => 'admin',
            'mobile' => '15995716443',
        ];
        $rs = $model->create($userData);
        $this->assertEquals($rs, true, implode(',', $model->getFirstErrors()));
    }

    public function testUpdate(){

        $model = AdminModel::findOne(['mobile' => '15995716443']);
        $updateData = [
            'username' => 'admin',
            'mobile' => '15995716443',
            'password' => 'admin',
        ];
        $rs = $model->edit($updateData);
        $this->assertEquals($rs, true, implode(',', $model->getFirstErrors()));

    }

    public function testLogin(){
        $model = new AdminModel();
        $loginData = [
            'mobile' => '15995716443',
            'password' => 'admin'
        ];
        $rs = $model->login($loginData);
        $this->assertEquals($rs, true, implode(',', $model->getFirstErrors()));
    }



}