<?php
namespace service;


use app\service\BtnService;

class BtnServiceTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected $data = [
        'name' => '按钮1',
        'display_text' => '按钮1内容',
        'link' => 'http://baidu.com',
    ];

    protected $service;

    protected function _before()
    {
        $this->service = new BtnService();
    }

    protected function _after()
    {
    }

    // tests
    public function testCreate()
    {
        $rs = $this->service->create($this->data);
        $error = $this->service->error;
        $this->assertTrue($rs, implode(',', $error));
    }
}