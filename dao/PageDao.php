<?php
/**
 * Created by PhpStorm.
 * User: admin_
 * Date: 2017/9/23
 * Time: 7:06
 */

namespace app\dao;


use app\models\GuestBookModel;
use app\models\PageModel;
use app\models\PageShowTracking;
use yii\behaviors\TimestampBehavior;

class PageDao extends PageModel
{

    public function getTracking(){
        return $this->hasMany(PageShowTracking::className(), ['page_id' => 'id']);
    }

}