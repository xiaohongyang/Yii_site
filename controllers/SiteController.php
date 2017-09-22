<?php

namespace app\controllers;

use app\common\components\helpers\MapHelper;
use app\common\components\helpers\ToolsHelper;
use app\common\components\helpers\WeChatHelper;
use app\models\RegisterModel;
use app\models\RegisterUserInfoModel;
use app\models\TeamModel;
use app\models\TeamUserModel;
use app\models\UserIdentity;
use app\models\UserModel;
use app\models\UserMongoModel;
use app\models\WeChatModel;
use linslin\yii2\curl\Curl;
use Yii;
use yii\base\Exception;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\Cookie;

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        return $this->render('index', [
            'teamModel' => []
        ]);
    }public function actionPage2()
    {

        return $this->render('page2', [
            'teamModel' => []
        ]);
    }public function actionPage3()
    {

        return $this->render('page3', [
            'teamModel' => []
        ]);
    }public function actionPage4()
    {

        return $this->render('page4', [
            'teamModel' => []
        ]);
    }


}
