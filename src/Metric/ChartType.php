<?php

namespace Dcat\Admin\ECharts\Metric;

// ECharts的图表类型
class ChartType
{
    const CHART_LINE = 'line'; // 折线/面积图
    const CHART_BAR = 'bar'; // 柱状图（或称条形图
    const CHART_PIE = 'pie'; // 饼图
    const CHART_SCATTER = 'scatter'; // 散点（气泡）图
    const CHART_EFFECT_SCATTER = 'effectScatter'; // 涟漪特效动画的散点（气泡）图
    const CHART_RADAR = 'radar'; // 雷达图
    const CHART_TREE = 'tree'; // 树图
    const CHART_TREE_MAP = 'treemap'; // 层级数据,树状数据
    const CHART_SUNBURST = 'sunburst'; // 旭日图
    const CHART_BOXPLOT = 'boxplot'; // 箱形图、盒须图、盒式图、盒状图、箱线图
    const CHART_CANDLESTICK = 'candlestick'; // K线图
    const CHART_HEAT_MAP = 'heatmap'; // 热力图
    const CHART_MAP = 'map'; // 地图
    const CHART_PARALLEL = 'parallel'; // 平行坐标系
    const CHART_LINES = 'lines'; // 路径图
    const CHART_GRAPH = 'graph'; // 关系图
    const CHART_SANKEY = 'sankey'; // 桑基图
    const CHART_FUNNEL = 'funnel'; // 漏斗图
    const CHART_GAUGE = 'gauge'; // 仪表盘
    const CHART_PICTORIAL_BAR = 'pictorialBar'; // 象形柱图
    const CHART_THEME_RIVER = 'themeRiver'; // 主题河流
    const CHART_CUSTOM = 'custom'; // 自定义图
}
