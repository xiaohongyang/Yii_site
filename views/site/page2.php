<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="hero-content text-center">
                <h1><?=$model->title?></h1>
                <p class="intro"><?=$model->content_1?></p>
                <a href="<?=\yii\helpers\Url::to(['site/page3'])?>" class="btn btn-accent btn-large"><?=\app\common\components\widget\BtnWidget::widget(['btn_id'=>2])?></a>
            </div>
        </div>
    </div>
</div>


