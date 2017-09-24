<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BtnClickTrackingModel */

$this->title = 'Update Btn Click Tracking Model: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Btn Click Tracking Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="btn-click-tracking-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
