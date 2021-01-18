<div class="extension-demo">
	Welcome to dcat-admin !

    <div id="chart01" style="width: 600px;height:400px;"></div>
</div>

<style>
	.extension-demo {
		color: @primary;
	}
</style>

<script require="@dcat-admin.echarts">
	// $('.extension-demo').extensionDemo();
	Dcat.ready(function (){
        var myChart = echarts.init(document.getElementById('chart01'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: 'ECharts 入门示例'
            },
            tooltip: {},
            legend: {
                data:['销量']
            },
            xAxis: {
                data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
            },
            yAxis: {},
            series: [{
                name: '销量',
                type: 'line',
                data: [5, 20, 36, 10, 10, 20]
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>
