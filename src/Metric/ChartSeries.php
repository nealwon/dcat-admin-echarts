<?php


namespace Dcat\Admin\ECharts\Metric;


use Illuminate\Contracts\Support\Renderable;

class ChartSeries implements Renderable
{
    // 图表名称
    protected $name;

    // 图表类型
    protected $chart_type;

    // 所有配置项，type被踢除了
    protected $options = [];

    // 图表数据
    protected $data = [];

    // 允许设置的项
    protected $allowed_options = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // 待填充到option中的series的数据
    public function render(): array
    {
        $this->options['name'] = $this->name;
        $this->options['type'] = $this->chart_type;
        $this->options['data'] = $this->data;
        return $this->options;
    }

    // 设置当前series的选项
    public function setOption(string $key, $value, bool $override = false): void
    {
        if (!empty($this->allowed_options) && !in_array($key, $this->allowed_options)) {
            throw new \Exception('Invalid key set. allowed keys are '. json_encode($this->allowed_options));
        }
        if ($override != true && isset($this->options[$key])) {
            return;
        }
        $this->options[$key] = $value;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }
}
