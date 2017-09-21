<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ArticleSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '轮播管理';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="article-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'link',
            [
                'attribute' => 'pic',
                'format' => 'raw',
                'value' => function($model) {
                    return "<a href='javascript:void(0)' onclick='window.open(\"{$model->picRelUrl}\")'  ><img src='{$model->picRelUrl}' width=150 /> </a> ";
                }
            ],
//            'created_at' ,
             'updated_at:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>



