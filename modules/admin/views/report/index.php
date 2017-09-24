<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PageSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '报表管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-model-index">

    <h3>按钮点击报表</h3>

    <div id="c1" style="width: 80%"></div>

    <br/>
    <br/>
    <h3>页面展示报表</h3>
    <div id="c2" style="width: 80%"></div>


    <script>

        function showChartBtn(data){


            var width = $('#c1').css('width')
            width = parseInt(width)
            var chart = new G2.Chart({
                id: 'c1', // 指定图表容器 ID
                width : width, // 指定图表宽度
                height : 300 // 指定图表高度
            });
            // Step 2: 载入数据源,定义列信息
            chart.source(data, {
                btn: {
                    alias: '按钮名称' // 列定义，定义该属性显示的别名
                },
                number: {
                    alias: '点击量'
                }
            });

            chart.tooltip({
                offset: 10, // 设置 tooltip 显示位置时距离当前鼠标 x 轴方向上的距离复制代码
                //crosshairs: true, // 是否显示 tooltip 辅助线
                title: null, // 用于控制是否显示 tooltip 框内的 title
                map: { // 用于指定 tooltip 内显示内容同原始数据字段的映射关系
                    title: '点击量', // 为数据字段名时则显示该字段名对应的数值，常量则显示常量
                    name: '点击量', // 为数据字段名时则显示该字段名对应的数值，常量则显示常量
                    value: '数据字段名' // 为数据字段名时则显示该字段名对应的数值
                }
            });

            chart.legend('btn', {
                btn: null // 不展示图例 title
            });
            chart.legend(false)

            // Step 3：创建图形语法，绘制柱状图，由 genre 和 sold 两个属性决定图形位置，genre 映射至 x 轴，sold 映射至 y 轴
            chart.interval().position('btn*number').color('btn')
            // Step 4: 渲染图表
            chart.render();

        }

        var freshBtnReport = function(){
            var id = '#c1'
            $(id).html('')
            var url = '<?=\yii\helpers\Url::to(['/admin/report/btn-report-data'])?>'
            var data = {}
            $.ajax({
                url : url,
                data : data,
                dataType : 'json',
                type : 'post',
                success : function (json) {
                    var data = []
                    if(json.status == 1 ){
                        for(var i=0; i< json.data.length; i++) {
                            data.push({
                                'btn' : json.data[i]['display_text'],
                                'number' : parseInt(json.data[i]['tracking_count'])
                            })
                        }
                        console.log(data)

                        showChartBtn(data)
                    }
                }
            })
        }


        function showChartPage(data){


            var width = $('#c2').css('width')
            width = parseInt(width)
            var chart = new G2.Chart({
                id: 'c2', // 指定图表容器 ID
                width : width, // 指定图表宽度
                height : 300 // 指定图表高度
            });
            // Step 2: 载入数据源,定义列信息
            chart.source(data, {
                page: {
                    alias: '页面名称' // 列定义，定义该属性显示的别名
                },
                number: {
                    alias: '展示量'
                }
            });

            chart.tooltip({
                offset: 10, // 设置 tooltip 显示位置时距离当前鼠标 x 轴方向上的距离复制代码
                //crosshairs: true, // 是否显示 tooltip 辅助线
                title: null, // 用于控制是否显示 tooltip 框内的 title
                map: { // 用于指定 tooltip 内显示内容同原始数据字段的映射关系
                    title: '展示量', // 为数据字段名时则显示该字段名对应的数值，常量则显示常量
                    name: '展示量', // 为数据字段名时则显示该字段名对应的数值，常量则显示常量
                    value: '数据字段名' // 为数据字段名时则显示该字段名对应的数值
                }
            });

            chart.legend('page', {
                page: null // 不展示图例 title
            });
            chart.legend(false)

            // Step 3：创建图形语法，绘制柱状图，由 genre 和 sold 两个属性决定图形位置，genre 映射至 x 轴，sold 映射至 y 轴
            chart.interval().position('page*number').color('page')
            // Step 4: 渲染图表
            chart.render();

        }

        var freshPageReport = function(){
            var id = '#c2'
            $(id).html('')
            var url = '<?=\yii\helpers\Url::to(['/admin/report/page-report-data'])?>'
            var data = {}
            $.ajax({
                url : url,
                data : data,
                dataType : 'json',
                type : 'post',
                success : function (json) {
                    var data = []
                    if(json.status == 1 ){
                        for(var i=0; i< json.data.length; i++) {
                            data.push({
                                'page' : json.data[i]['page_name'],
                                'number' : parseInt(json.data[i]['tracking_count'])
                            })
                        }
                        console.log(data)

                        showChartPage(data)
                    }
                }
            })
        }

        $(function(){
            freshBtnReport()
            freshPageReport()
        })
    </script>
</div>
