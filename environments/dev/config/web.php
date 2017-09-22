<?php

require_once ( dirname(__FILE__ ) . '/../common/components/helpers/ToolsHelper.php');
require_once ( dirname(__FILE__ ) . '/../common/components/helpers/MobileMsgAliHelpers.php');
require_once ( dirname(__FILE__ ) . '/../common/components/helpers/WeChatHelper.php');

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'admin' => [
            'class'=>'app\modules\admin\AdminModule'
        ]
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'V0R74dvo0zqUGF9rBzKidy-0_JkJSyH_',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'admin_user' => [
            'class'             => '\yii\web\User',
            'identityClass' => 'app\modules\admin\models\AdminUser',
            'enableAutoLogin' => true,
            'idParam'           => '_adminId',
            'identityCookie'    => ['name'=>'_admin','httpOnly' => true],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'mongodb' => [
            'class' => 'yii\mongodb\Connection',
            'dsn' => 'mongodb://root:123456@127.0.0.1:27017/test'
        ],
        'urlManager'=>[
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [

                ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
                "<controller:\w+>/<action:\w+>/<id:\d+>"=>"<controller>/<action>",
                "<module:\w+>/<controller:\w+>/<action:\w+>"=>"<module>/<controller>/<action>",
                "admin"=>"admin/index/index",
                "<controller:\w+>/<action:\w+>"=>"<controller>/<action>",
            ],
        ],
        'mobileMsgHelpers' => [
            'class' => 'app\common\components\helpers\MobileMsgHelpers'
        ],


    ],
    'controllerMap' => [
        'class' => '\yii\mongodb\Connection',
        'mongodb-migrate' => 'yii\mongodb\console\controllers\MigrateController'
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = array('class'=>'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.*.*', '192.168.178.20','*.*.*.*'],
    );
}

return $config;
