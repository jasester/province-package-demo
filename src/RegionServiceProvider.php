<?php

namespace Hnndy\Province;

use Illuminate\Support\ServiceProvider;

class RegionServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        $this->loadViewsFrom(__DIR__ . '/resource/province', 'province');

        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/database/seeds' => database_path('seeds')
        ], 'seed');

        $this->publishes([
            __DIR__ . '/resource/province' => base_path('resources/views/vendor/province'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // include __DIR__ . '/routes.php';
    }
}
