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
        'word' => '按钮管理',
        'link' => Url::to(['/admin/btn/index']),
        'target' => '',
        'class' => $classConfig
    ],[
        'word' => '报表管理',
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
