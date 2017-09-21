<?php
namespace models;


use app\controllers\BaseController;
use app\models\MatchModel;
use app\modules\admin\models\ConfigModel;
use app\controllers\ConfigTrait;
use yii\log\Logger;

class ConfigModelsTest extends \Codeception\Test\Unit
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

    public function testEdit(){

//        if(!ConfigTrait::isIniTed()) {
//
//            $configModel = ConfigModel::findOne(1);
//            ConfigTrait::configInit($configModel->getDistanceLimit(), $configModel->getClockTimeLimit(), $configModel->getOffDutyLimit());
//        }
//        return;



//        $configModel = ConfigModel::findOne(1);
//        $arr = [
//            'distance_limit' => 11120
//        ];
//
//
//        $rs = $configModel->edit($arr);

        $distanceLimit = MatchModel::getClockTimeMinutesLimit();

        $this->assertEquals($distanceLimit, 120, "error!");
    }
}