<?php

namespace Danilo\Prueba;

use Illuminate\Support\ServiceProvider;

class PruebaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Danilo\Prueba\PruebaController');
        $this->loadViewsFrom(__DIR__.'/views', 'prueba');
    }
}
