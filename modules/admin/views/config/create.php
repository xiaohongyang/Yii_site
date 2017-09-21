<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ConfigModel */

$this->title = 'Create Config Model';
$this->params['breadcrumbs'][] = ['label' => 'Config Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
