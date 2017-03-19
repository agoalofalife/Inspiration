<?php

namespace Inspiration\Providers;

use Inspiration\Commands\InspirationSeedCommand;
use Illuminate\Support\ServiceProvider;
use Inspiration\Commands\InspirationCommand;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();
        $this->registerConfig();
        $this->mergeConfig();
        $this->loadViews();
        $this->registerCommands();
        $this->loadMigrations();
    }

    public function registerCommands() : void
    {
        $this->commands([
            InspirationCommand::class,
            InspirationSeedCommand::class
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/routes.php', 'inspiration.routes'
        );
    }

    /**
     * Register routes for Inspiration
     */
    public function registerRoutes() : void
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }

    /**
     * Publishes config from Inspiration
     */
    public function registerConfig() : void
    {
        $this->publishes([
            __DIR__.'/../../config/routes.php' => config_path('inspiration.routes.php'),
        ]);
    }

    /**
     * Connect configuration of the base file with the default file
     */
    public function mergeConfig() : void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/routes.php', 'inspiration.routes'
        );
    }

    /**
     * Load views
     */
    public function loadViews() : void
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'inspiration');
    }

    /**
     * Load migrations
     */
    public function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations/');
    }
}
