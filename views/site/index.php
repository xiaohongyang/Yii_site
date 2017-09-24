<style type="text/css">
    .section-camera .container .section-img{
        left: 0;
        margin-left: 15%;
    }

    .the_title{
        font-size: 3em;
    }
    .the_content{
        font-size: 1.5em; margin-top:12px;
    }
    .btn-wrap{
        padding-top: 140px; margin-left: 15%;
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
    </div>
</div>


<div class="main">


    <div class="bd xm-product-box J_section-box">


        <div class="section section-camera" style="">
            <div class="container">
                <div class="section-img" style="top: 220px;">
                    <div class="the_title" style="">
                        <?=$model->title?>

                    </div>
                    <div class="the_content" style="">
                        <?=$model->content_1?>
                    </div>
                </div>

                <div class="section-text">
                    <div class="title1"> </div>
                    <div class="title2"> </div>
                    <div class="rect-long" style="display:none;">

                    </div>

                    <div class="btn-wrap" style="">


                        <a href="<?=\yii\helpers\Url::to(['site/page2'])?>" style=" ">

                            <div class="rect-short rect-short-left"
                                 style="">
                                <?=\app\common\components\widget\BtnWidget::widget(['btn_id'=>1])?>
                            </div>
                        </a>

                        <a href="<?=\yii\helpers\Url::to(['site/page2'])?>">
                            <div class="rect-short rect-short-right"
                                 style="">
                                <?=\app\common\components\widget\BtnWidget::widget(['btn_id'=>2])?>

                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>


    </div>


</div>
</div>