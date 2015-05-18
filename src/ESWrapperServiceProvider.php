<?php namespace Media24si\ESWrapper;

use Elasticsearch\ClientBuilder;
use Illuminate\Support\ServiceProvider;

class ESWrapperServiceProvider extends ServiceProvider  {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/config/eswrapper.php' => config_path('eswrapper.php'),
		]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton(
			'elastic',
			function() {
				$clientBuilder = ClientBuilder::create();
				$clientBuilder->setHosts( config('eswrapper.hosts'), ['localhost:9200'] );
				return $clientBuilder->build();
			}
		);
	}

}