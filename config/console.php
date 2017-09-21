<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'components' => [
        'urlManager' => [
//            'class' => 'yii\web\UrlManager',
//            'scriptUrl' => 'http://onroad',
            'scriptUrl' => 'http://kaoqing.adsage.com',
            'enablePrettyUrl' => true,
            'rules' => [

                ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
                "<controller:\w+>/<action:\w+>/<id:\d+>"=>"<controller>/<action>",
                "<module:\w+>/<controller:\w+>/<action:\w+>"=>"<module>/<controller>/<action>",
                "admin"=>"admin/index/index",
                "<controller:\w+>/<action:\w+>"=>"<controller>/<action>",
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'params' => $params,
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
