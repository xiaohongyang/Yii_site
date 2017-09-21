<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2016/12/8
 * Time: 23:01
 */

use \yii\helpers\Url;

$controller = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;


if ($controller == 'index' && $action=='index') {
    $classConfig = 'active';
    $classSlide = '';


} else {
    $classSlide = 'active';
    $classConfig = '';
}

$menuList = [
    [
        'word' => 'app设置',
        'link' => Url::to(['/admin/index/index']),
        'target' => '',
        'class' => $classConfig
    ],[
        'word' => '轮播管理',
        'link' => Url::to(['/admin/article/index']),
        'target' => '',
        'class' => $classSlide
    ],
];

?>

<?php
foreach ($menuList as $menu) {
?>
    <ul>
        <li>
            <a href="<?=$menu['link']?>" class="<?=$menu['class']?>" target="<?=$menu['target']?>" ><?=$menu['word']?> </a>
        </li>
    </ul>
<?php
}
?>

<?php
