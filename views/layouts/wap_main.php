<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\WapAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html xml:lang="en-EN" lang="en-EN">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Content-Type" content="text/html;charset=<?= Yii::$app->charset ?>">
    <title>HIFI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="">
    <?php
    NavBar::begin([
        'brandLabel' => '',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [

        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>


<?php $this->endBody() ?>

<script type="text/javascript">

    $(function(){
        $('.btn-tracking').click(function(){
            var btn_id = $(this).attr('data-id')
            var data = {'btn_id' : btn_id}
            var url = '<?=\yii\helpers\Url::to(['site/click-tracking'])?>'
            var jumgUrl = $(this).attr('data-url')
            $.ajax({
                url : url,
                data : data,
//                async : false,
                dataType : 'json',
                success : function (json) {
                    console.log(json)
                    window.location.href = jumgUrl
                }
            })
        })

        $('body').on('click', '.guest-book-submit', function(){
            var email = $('input[name=email]').val()
            var content = $('textarea[name=content]').val()
            var url = '<?=\yii\helpers\Url::to(['site/guestbook'])?>'
            var data = {
                'email' : email,
                'content' : content
            }

            var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;

            if($.trim(data.email) == '') {
                $.x_alert({'cont':'邮箱不能为空！'})
                return false;
            } else if(!myreg.test(data.email)){
                $.x_alert({'cont':'请输入有效的E_mail！'})
                return false;
            } else if($.trim(data.content) == '') {
                $.x_alert({'cont':'意见内容不能为空！'})
                return false;
            }


            $.ajax({
                url : url,
                data : data,
                dataType : 'json',
                success : function (json) {
                    console.log(json)
                    $.x_alert({'cont':json.message})
                    $('.guest-form')[0].reset()
                }
            })
        })
    })
</script>
</body>
</html>
<?php $this->endPage() ?>
