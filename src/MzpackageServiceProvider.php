<?php

namespace Vendor\Mzpackage;

use Illuminate\Support\ServiceProvider;

class MzpackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Vendor\Mzpackage\Controllers\mzpackagecontroller');
        $this->loadViewsFrom(__DIR__.'/views', 'CurrencyFormatter');
    }
}
