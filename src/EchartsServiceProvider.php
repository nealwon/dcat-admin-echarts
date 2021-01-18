<?php

namespace Dcat\Admin\ECharts;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class EchartsServiceProvider extends ServiceProvider
{
	protected $js = [
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
