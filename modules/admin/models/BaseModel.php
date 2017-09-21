<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2016/12/9
 * Time: 8:21
 */

namespace app\modules\admin\models;


use yii\db\ActiveRecord;
use yii\db\BaseActiveRecord;

class BaseModel extends ActiveRecord
{

    const SCENARIO_CREATE ='create';
    const SCENARIO_UPDATE ='update';
    const SCENARIO_LOGIN ='login';

    const ROLE_PASSENGER = 1;
    const ROLE_DRIVER = 2;

    const CONT_MAX_FAMILY_NUMBER = 4;

    public $message;



    public function create($data){
        $this->setScenario(self::SCENARIO_CREATE);
        if ($this->load($data) && $this->validate()) {
        }
    }

    public static function getDbPrefix(){
        return \Yii::$app->db->tablePrefix;
    }

    public function getConnection(){
        return \Yii::$app->db;
    }

}