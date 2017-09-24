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

$class01 = $class02 = $class03 = $class04 = '';
switch ($controller) {
    case 'btn':
        $class01 = 'active';
        break;
    case 'page':
        $class02 = 'active';
        break;
    case 'report':
        $class03 = 'active';
        break;
    case 'guestbook':
        $class04 = 'active';
        break;
}

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
        'class' => $class01
    ],[
        'word' => '页面管理',
        'link' => Url::to(['/admin/page/index']),
        'target' => '',
        'class' => $class02
    ],[
        'word' => '报表管理',
        'link' => Url::to(['/admin/report/index']),
        'target' => '',
        'class' => $class03
    ],[
        'word' => '留言管理',
        'link' => Url::to(['/admin/guestbook/index']),
        'target' => '',
        'class' => $class04
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
