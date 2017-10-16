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
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php $this->head() ?>

    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16"/>
    <link rel="stylesheet"
          href="/static_source/css//cssthemes4/hxc_18_sedna/http________demo.cssmoban.com__cssthemes4__hxc_18_sedna__css__normalize.min.css.css">
    <link rel="stylesheet"
          href="/static_source/css//cssthemes4/hxc_18_sedna/http________demo.cssmoban.com__cssthemes4__hxc_18_sedna__css__bootstrap.min.css.css">
    <link rel="stylesheet"
          href="/static_source/css//cssthemes4/hxc_18_sedna/http________demo.cssmoban.com__cssthemes4__hxc_18_sedna__css__jquery.fancybox.css.css">
    <link rel="stylesheet"
          href="/static_source/css//cssthemes4/hxc_18_sedna/http________demo.cssmoban.com__cssthemes4__hxc_18_sedna__css__flexslider.css.css">
    <link rel="stylesheet"
          href="/static_source/css//cssthemes4/hxc_18_sedna/http________demo.cssmoban.com__cssthemes4__hxc_18_sedna__css__styles.css.css">
    <link rel="stylesheet"
          href="/static_source/css//cssthemes4/hxc_18_sedna/http________demo.cssmoban.com__cssthemes4__hxc_18_sedna__css__queries.css.css">
    <link rel="stylesheet"
          href="/static_source/css//cssthemes4/hxc_18_sedna/http________demo.cssmoban.com__cssthemes4__hxc_18_sedna__css__etline-font.css.css">
    <link rel="stylesheet"
          href="/static_source/css//cssthemes4/hxc_18_sedna/http________demo.cssmoban.com__cssthemes4__hxc_18_sedna__bower_components__animate.css__animate.min.css.css">
    <link rel="stylesheet"
          href="/static_source/css//cssthemes4/hxc_18_sedna/http________maxcdn.bootstrapcdn.com__font-awesome__4.3.0__css__font-awesome.min.css.css">

    <style type="text/css">
        .hero-content h1{
            font-size: 25px;
        }
        .page2 .hero {
            background : url(/static_source/css/cssthemes4/img/hero-img9.jpg) center center;
        }
        .page3 .hero {
            background : url(/static_source/css/cssthemes4/img/hero-bg-01.jpg) center center;
        }
    </style>
</head>
<body id="top" class="<?=Yii::$app->controller->action->id?>">
<div class="adcenter" style="height: 90px;"> </script></div>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="browsehappy.com_">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<section class="hero">
    <section class="navigation">
        <header>
            <div class="header-content">
                <div class="logo"><a href="/"  ><h3 style="color:#999;letter-spacing: 9px">H<span style="color:#fff">I</span>FI</h3></a></div>
                <div class="header-nav">
                    <nav>
                        <ul class="primary-nav">
                            <li><a href="#.htmlfeatures">我们</a></li>
                            <li><a href="#.htmlassets">产品</a></li>
                            <li><a href="#.htmlblog">服务</a></li>
                            <li><a href="#.htmldownload">联系</a></li>
                        </ul>
                        <ul class="member-actions">
                            <li><a href="#.htmldownload" class="login">登记</a></li>
                            <li><a href="#.htmldownload" class="btn-white btn-small">注册</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="navicon">
                    <a class="nav-toggle" href="#.html"><span></span></a>
                </div>
            </div>
        </header>
    </section>



    <?php $this->beginBody() ?>

    <?= $content ?>

    <?php $this->endBody() ?>

    <div class="down-arrow floating-arrow"><a href="#.html"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></i></a></div>
</section>






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
