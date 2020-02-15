<?php

namespace Stijlgenoten\DataCollection;

use Illuminate\Support\ServiceProvider;
use Stijlgenoten\DataCollection\Commands\MakeDataCollection;
use Stijlgenoten\DataCollection\DataCollection;


class DataCollectionServiceProvider extends ServiceProvider{
	
	public function boot()
	{
		
		if ($this->app->runningInConsole()) {
			$this->commands([
				MakeDataCollection::class,
			]);
		}

	}

	public function register( )
	{
		//
	}
}