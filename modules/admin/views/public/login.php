<?php
use yii\captcha\Captcha;
use yii\helpers\Html;

?>

<?=Html::cssFile("@web/css/admin/login.css") ?>

<div class="container">

    <div class="row">

        <div class="  logcen test" style="height: 255px;">


            <?php $form = \yii\widgets\ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-horizontal form-inline'],
                'fieldConfig' => [
                    'template' => "{label}\n {input} \n",
                    'labelOptions' => ['class' =>  'control-label'],
                    'inputOptions' => ['class' => 'form-control'],
                ],
                'enableAjaxValidation' => false
            ]); ?>
            <div class="wrap-div">
                <h3 class="col-md-offset-1">HIFI登录系统</h3>

                <div>
                    <?=$form->errorSummary($model); ?>
                </div>

                <div class="margin-top-small" style="margin-top: 20px;"> </div>


                <?= $form->field($model, 'username')->textInput(['placeholder'=>'请输入登录名']) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'请输入密码'])->label('密&nbsp;码&nbsp;&nbsp;') ?>



                <div class="form-group" >

                    <!--<input type="submit" value="登录" class="btn btn-success center-block">-->

                    <div class=" " style="width: 356px;">
                        <?= Html::submitInput('登录', [
                            'class' => 'btn btn-success '
                        ]); ?>
                    </div>
                </div>
            </div>
            <?php \yii\widgets\ActiveForm::end() ?>
        </div>
    </div>

</div>



