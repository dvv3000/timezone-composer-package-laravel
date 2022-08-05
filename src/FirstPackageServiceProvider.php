<?php

namespace Vietdv\FirstPackage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

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
        $this->loadViewsFrom(__DIR__ . '/views', 'timezones');

        $this->publishes([
            __DIR__ . '/views' => base_path('resoures/views/vietdv/firstPackage')
        ]);
    }
}
