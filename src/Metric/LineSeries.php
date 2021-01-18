<?php


namespace Dcat\Admin\ECharts\Metric;


class LineSeries extends ChartSeries
{
    protected $chart_type = ChartType::CHART_LINE;

    protected $allowed_options = [
        'id',
        'name',
        'coordinateSystem',
        'xAxisIndex',
        'yAxisIndex',
        'polarIndex',
        'symbol',
        'symbolSize',
        'symbolRotate',
        'symbolKeepAspect',
        'symbolOffset',
        'showSymbol',
        'showAllSymbol',
        'hoverAnimation',
        'legendHoverLink',
        'stack',
        'cursor',
        'connectNulls',
        'clip',
        'step',
        'label',
        'itemStyle',
        'lineStyle',
        'areaStyle',
        'emphasis',
        'smooth',
        'smoothMonotone',
        'sampling',
        'dimensions',
        'encode',
        'seriesLayoutBy',
        'datasetIndex',
        'markPoint',
        'markLine',
        'markArea',
        'zlevel',
        'z',
        'silent',
        'animation',
        'animationThreshold',
        'animationDuration',
        'animationEasing',
        'animationDelay',
        'animationDurationUpdate',
        'animationEasingUpdate',
        'animationDelayUpdate',
        'tooltip',
    ];
}
