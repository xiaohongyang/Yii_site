<?php
    use \yii\helpers\Url;
?>
<ul id="bottom">
    <li class="border_rt"><a href="http://www.xjc1.com">汽车陪驾</a></li>
    <li class="border_rt"><a href="<?=Url::to(['/'])?>">通勤主页</a></li>
    <li class="border_rt"><a href="<?=Url::to(['/site/rent-car'])?>">租车</a></li>
    <li><a href="<?=Url::to(['/site/route-list'])?>">&nbsp;所有线路</a></li>
</ul>




<script type="text/javascript">

    $(function(){
        $('body').on('click', '.cancel-team', function(){

            var url = '<?=\yii\helpers\Url::to('/site/cancel')?>';
            var data = {
                _csrf : '<?=Yii::$app->request->getCsrfToken()?>',
            };
            $.ajax({
                url : url,
                data : data,
                dataType : 'json',
                type : 'post',
                success : function (json) {
                    if(json.status == '<?=STATUS_NOT_LOGIN?>'){
                        window.location.href = '<?=Url::to(['/site/login'])?>';
                        return;
                    }
                    var message = json.message;

                    $('#modal').modal('show')
                    $('.modal-body').html(message);
                    $('#modal').on('hidden.bs.modal', function () {
                        window.location.href = window.location.href;
                    })
                }
            })


        })
    })
</script>