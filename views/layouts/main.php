<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

if(\app\controllers\BaseController::check_wap())
    \app\assets\WapAppAsset::register($this);
else
    AppAsset::register($this);
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

        <?= $content ?>

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
                alert("提示\n\n邮箱不能为空！")
                return false;
            } else if(!myreg.test(data.email)){
                alert('提示\n\n请输入有效的E_mail！');
                return false;
            } else if($.trim(data.content) == '') {
                alert("提示\n\n意见内容不能为空！")
                return false;
            }


            $.ajax({
                url : url,
                data : data,
                dataType : 'json',
                success : function (json) {
                    console.log(json)
                    alert(json.message)

                    $('.guest-form')[0].reset()
                }
            })
        })
    })
</script>
</body>
</html>
<?php $this->endPage() ?>
