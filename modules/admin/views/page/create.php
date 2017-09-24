<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PageModel */

$this->title = 'Create Page Model';
$this->params['breadcrumbs'][] = ['label' => '页面管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
