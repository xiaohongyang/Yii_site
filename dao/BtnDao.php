<?php
/**
 * Created by PhpStorm.
 * User: admin_
 * Date: 2017/9/23
 * Time: 7:06
 */

namespace app\dao;


use app\models\BtnModel;
use app\models\GuestBookModel;
use app\models\PageModel;
use yii\behaviors\TimestampBehavior;

class BtnDao extends BtnModel
{


    public function getClick(){
        return $this->hasMany(BtnClickTrackingDao::className(), ['btn_id' => 'id']);
    }



}