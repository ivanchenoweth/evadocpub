<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TipoDependenciasServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->TipoDependenciasService();

        $this->app->singleton(TipoDependenciasService::class, function ($app) {
            return new TipoDependenciasService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
