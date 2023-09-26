<?php

namespace Laratheme\Demo;

use Illuminate\Support\ServiceProvider;

class LaraDemoServiceProvider extends ServiceProvider
{

	/**
	 * Bootstrap the module services.
	 *
	 * @return void
	 */
	public function boot()
	{

		// Publish Assets
		$this->publishes([
			__DIR__.'/../_assets/_public/fonts' => public_path('assets/themes/demofive/fonts'),
			__DIR__.'/../_assets/_public/images' => public_path('assets/themes/demofive/images'),
			__DIR__.'/../_assets/_public/vendor' => public_path('assets/themes/demofive/js/vendor'),
		], 'lara');

	}

	/**
	 * Register the module services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
