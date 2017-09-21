<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2016/11/30
 * Time: 18:20
 */

namespace app\models;


use app\common\components\helpers\WeChatHelper;
use phpDocumentor\Reflection\Types\Boolean;
use yii\helpers\ArrayHelper;
use yii\mongodb\ActiveRecord;

class UserMongoModel extends ActiveRecord
{

    public static function collectionName(){
        return 'xhy_user';
    }

    public function attributes()
    {
        return [
            '_id',
            'name',
            'age'
        ];
    }


}