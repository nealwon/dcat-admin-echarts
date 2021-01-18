<?php

use Dcat\Admin\ECharts\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('echarts', Controllers\EchartsController::class.'@index');