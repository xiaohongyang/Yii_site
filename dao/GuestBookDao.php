<?php
/**
 * Created by PhpStorm.
 * User: admin_
 * Date: 2017/9/23
 * Time: 7:06
 */

namespace app\dao;


use app\models\GuestBookModel;
use yii\behaviors\TimestampBehavior;

class GuestBookDao extends GuestBookModel
{
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className()
            ]
        ];
    }


}