<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/admin/site.css',
    ];
    public $js = [

        'js/admin/site.js',
        'js/admin/g2.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
