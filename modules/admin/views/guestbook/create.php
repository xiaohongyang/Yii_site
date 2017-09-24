<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GuestBookModel */

$this->title = 'Create Guest Book Model';
$this->params['breadcrumbs'][] = ['label' => '留言管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guest-book-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
