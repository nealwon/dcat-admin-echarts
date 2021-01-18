<?php

namespace Dcat\Admin\ECharts\Http\Controllers;

use Dcat\Admin\ECharts\Metric\Line;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Illuminate\Routing\Controller;

class EchartsController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(function (Row $row){
                $line = new Line();
                $line->dropdown([
                    0 => 'good',
                    1 => 'bad',
                ]);
                $line->title('ECharts 入门示例');
                $row->column(6, $line);
            });
    }
}
