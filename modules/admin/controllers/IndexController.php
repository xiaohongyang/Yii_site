<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2016/12/8
 * Time: 22:24
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\ConfigModel;
use yii\helpers\Url;

class IndexController extends BaseController
{
    public function actionIndex(){


        return $this->render('index', ['model' => []]);
    }
}