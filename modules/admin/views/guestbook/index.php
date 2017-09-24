<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\GuestBooksSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '留言管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guest-book-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?/*= Html::a('Create Guest Book Model', ['create'], ['class' => 'btn btn-success']) */?>
    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'email:email',
            'content:ntext',
            [
                'attribute' => 'created_at',
                'label' => '创建时间',
                'value' => function($model) {
                    return date('Y-m-d', $model->created_at);
                }

            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
