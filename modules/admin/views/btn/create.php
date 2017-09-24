<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BtnCURD */

$this->title = 'Create Btn Curd';
$this->params['breadcrumbs'][] = ['label' => '按钮管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="btn-curd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
