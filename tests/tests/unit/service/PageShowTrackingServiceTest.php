<?php
namespace service;


use app\service\BtnClickTrackingService;
use app\service\BtnService;
use app\service\PageShowTrackingService;

class PageShowTrackingServiceTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected $data = [
        'page_id' => '1',
        'ip' => '192.168.99.88',
    ];

    protected $service;

    protected function _before()
    {
        $this->service = new PageShowTrackingService();
    }

    protected function _after()
    {
    }

    // tests
    public function testCreate()
    {
        $data =[
            'page_id' => rand(1,3),
            'ip' => '192.168.99.'. (rand(7,9)),
        ];
        $rs = $this->service->create($data);
        $error = $this->service->error;
        $this->assertTrue($rs, implode(',', $error));
    }
}