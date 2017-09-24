<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BtnCURD */

$this->title = '按钮修改: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '按钮管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="btn-curd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
