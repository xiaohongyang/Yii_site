<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2016/12/19
 * Time: 13:31
 */

namespace app\controllers;


use app\modules\admin\models\ConfigModel;

trait ConfigTrait
{

    public static function configInit(ConfigModel $configModel){

        self::setDistanceLimit($configModel->getDistanceLimit());
        self::setClockTimeLimit($configModel->getClockTimeLimit());
        self::setOffDutyLimit($configModel->getOffDutyLimit());
    }

    public static function isIniTed(){
        return !(self::getDistanceLimit() === false || is_null(self::getDistanceLimit()));
    }

    /**
     * @return mixed
     */
    public static function getDistanceLimit()
    {
        return \Yii::$app->cache->get('distanceLimit');
    }

    /**
     * @param mixed $distanceLimit
     */
    public static function setDistanceLimit($distanceLimit)
    {
        \Yii::$app->cache->set('distanceLimit', $distanceLimit);
    }

    /**
     * @return mixed
     */
    public static function getClockTimeLimit()
    {
        return \Yii::$app->cache->get('clockTimeLimit');
    }

    /**
     * @param mixed $clockTimeLimit
     */
    public static function setClockTimeLimit($clockTimeLimit)
    {
        \Yii::$app->cache->set('clockTimeLimit', $clockTimeLimit);
    }

    /**
     * @return mixed
     */
    public static function getOffDutyLimit()
    {
        return \Yii::$app->cache->get('offDutyLimit');
    }

    /**
     * @param mixed $offDutyLimit
     */
    public static function setOffDutyLimit($offDutyLimit)
    {
        \Yii::$app->cache->set('offDutyLimit', $offDutyLimit);
    }




}