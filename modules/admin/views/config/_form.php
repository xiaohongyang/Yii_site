<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ConfigModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="config-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'we_chat_app_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'we_chat_secret')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'we_chat_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'webName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'distance_limit')->textInput() ?>

    <?= $form->field($model, 'clock_time_limit')->textInput() ?>

    <?= $form->field($model, 'off_duty_limit')->textInput() ?>

    <?= $form->field($model, 'send_msg')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
