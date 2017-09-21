<?php
	use \yii\app\helpers\Url;

	$this->title = 'app设置';
	$this->params['breadcrumbs'][] = $this->title;
?>

<div class="config-set">
	<h1> <?=$this->title?> </h1>
<?php
	$form = \yii\widgets\ActiveForm::begin([
		'options' => [
			'class' => 'form-inline'
		]
	]);
?>


	<?php //$form->field($model, 'webName')->textInput()?>  <br/>

	<?=$form->field($model, 'distance_limit')->textInput()?> <br/>

	<?=$form->field($model, 'clock_time_limit')->textInput()?> <br/>

	<?=$form->field($model, 'off_duty_limit')->textInput()->label('下班打卡匹配时间限制(分钟)')?> <br/>



	<div class="form-group">

		<?=\yii\bootstrap\Html::submitButton("提交", ['class'=>'btn btn-success btn-sm'])?>
	</div>


	<?php $form::end()?>
</div>


<script type="text/javascript">



</script>

<?php

	$message = Yii::$app->session->getFlash('message');
	$jsString = <<<STD
		$(function(){
			var message = '{$message}';
			if (message) {
				$('#alertModal').find('.modal-body').html(message);
				$('#alertModal').modal('show')
			}
		})
STD;

	Yii::$app->view->registerJs($jsString, \yii\web\View::POS_END);