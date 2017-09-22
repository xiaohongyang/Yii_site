<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2016/11/25
 * Time: 20:47
 */

namespace app\models;


use yii\base\Model;
use yii\db\ActiveRecord;

class BaseModel extends ActiveRecord
{

    const SCENARIO_CREATE ='create';
    const SCENARIO_UPDATE ='update';

    const ROLE_PASSENGER = 1;
    const ROLE_DRIVER = 2;

    const CONT_MAX_FAMILY_NUMBER = 4;

    public $message;



    public function create($data){
        $this->setScenario(!array_key_exists(self::SCENARIO_CREATE, $this->scenarios())
            ? self::SCENARIO_DEFAULT : self::SCENARIO_CREATE);

        $rs = false;

        if(!key_exists($this->formName(), $data)) {
            $data = [$this->formName() => $data];
        }

        if ($this->load($data) && $this->validate()) {
            $rs = $this->save();
        }
        return $rs;
    }

    public function edit($data){
        $this->setScenario(self::SCENARIO_UPDATE);
        $rs = false;
        if ($this->load($data) && $this->validate()) {
            $rs = $this->save();
        }
        return $rs;
    }

    public static function getDbPrefix(){
        return \Yii::$app->db->tablePrefix;
    }

    public function getConnection(){
         return \Yii::$app->db;
    }


}