<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ConfigModel */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Config Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'we_chat_app_id',
            'we_chat_secret',
            'we_chat_token',
            'admin_mobile',
            'webName',
            'distance_limit',
            'clock_time_limit:datetime',
            'off_duty_limit',
            'send_msg',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
