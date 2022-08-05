<?php

namespace Vietdv\FirstPackage;

use Illuminate\Support\ServiceProvider;

class FirstPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'first-package');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vietdv/firstPackage')
        ]);
    }
}
