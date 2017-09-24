<style type="text/css">
    .section-text{
        width: 60%;
    }
    .section .section-text .title1{
        width: 90%;
        font-size: 2em;
        opacity: 10;
        text-indent: 2em;
    }
    .section .section-text .title2{
        width: 90%;
        font-size: 2em;
        opacity: 10;
    }
    .section-carousel{
        left: 20%;
    }
    .section-carousel .section-text{
        width: 100%;
    }

    .the_title{
        font-size: 3em;
    }
    .the_content{
        font-size: 1.5em; margin-top:12px;
    }
    .btn-wrap{
        padding-top: 140px;
    }
    .btn-wrap a{
        line-height: 100px; font-size: 2em; width: 260px;
    }
    .section .section-text .rect-short{
        width: 220px;
        height: 70px;
        line-height: 70px;
    }
</style>

<div class="entry-board J_entryBoard">
    <div class="container">




        <div class="account-info ">


        </div>
    </div>
</div>



<div class="main">


    <div class="bd xm-product-box J_section-box">




    </div>



    <div class="section section-carousel" style="
                                                position: absolute;
                                                background: none;
">
        <div class="images">
            <div class="img img1 active" style=""></div>
            <div class="img img2" style=""></div>
            <div class="img img3" style=""></div>
        </div>

        <div class="section-text" style="background: none;  padding-top: 50px;">
            <div style="color: #000;">
                <div class="title1 the_title" style="height: 200px; width: 75%;">
                    <?= $model->title ?>
                </div>
                <div class="title3 the_content"><?= $model->content_1 ?></div>
            </div>


            <div style="padding-top: 70px;" class='btn-wrap'>


                <a href="<?=\yii\helpers\Url::to(['site/page3'])?>" style=" ">

                    <div class="rect-short rect-short-left"  >
                        <?=\app\common\components\widget\BtnWidget::widget(['btn_id'=>3])?>


                    </div>
                </a>

                <a href="<?=\yii\helpers\Url::to(['site/page3'])?>">
                    <div class="rect-short rect-short-right"  >
                        <?=\app\common\components\widget\BtnWidget::widget(['btn_id'=>4])?>


                    </div>
                </a>



            </div>

        </div>

    </div>






</div>
</div>
