<?php

namespace Abhitheawesomecoder\Jobboard;

use Illuminate\Support\ServiceProvider;

class JobboardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {    
         $this->loadViewsFrom(__DIR__.'/views', 'jobboard');

         $this->publishes([
         __DIR__.'/migrations' =>  database_path('/migrations')
        ], 'migrations');
		/*$this->publishes([
        __DIR__.'/Assets' => public_path('vendor/abhitheawesomecoder/jobboard'),
        ], 'public');*/
         $this->publishes([
         __DIR__.'/views' =>  base_path('resources/views/vendor/abhitheawesomecoder/jobboard')
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Abhitheawesomecoder\Jobboard\Controller\JobboardController');
        $this->app->make('Abhitheawesomecoder\Jobboard\Controller\JoblistController');
    }
}
