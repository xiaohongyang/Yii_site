<style type="text/css">
    body {
        background: url(/images/sec-camera-bg.jpg) center;
        background-size: cover;
    }

    .wrap {
        margin-bottom: 0;
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
                <div class="row-img" style="margin-top: 120px;">
                    <div style="font-size: 2em;">
                        <?= $model->title ?>

                    </div>
                    <div style="font-size: 1.5em; margin-top:50px;">
                        <?= $model->content_1 ?>
                    </div>
                </div>

                <div class="row" style="margin-top: 70px;">
                    <div class="col-xs-6 text-right">
                        <a href="<?= \yii\helpers\Url::to(['site/page3']) ?>" style=" " class="btn btn-lg btn-default">

                            <div class="rect-short rect-short-left"
                                 style=" ">
                                <?= \app\common\components\widget\BtnWidget::widget(['btn_id' => 3]) ?>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-6 text-left">
                        <a href="<?= \yii\helpers\Url::to(['site/page3']) ?>" class="btn btn-lg btn-default">
                            <div class="rect-short rect-short-right"
                                 style=" ">
                                <?= \app\common\components\widget\BtnWidget::widget(['btn_id' => 4]) ?>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>
</div>