<?php
	use \yii\app\helpers\Url;

	$this->title = 'app设置';
	$this->params['breadcrumbs'][] = $this->title;
?>

<div class="config-set">
	<h1> <?=$this->title?> </h1>

	<div class="form-group">

	</div>



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