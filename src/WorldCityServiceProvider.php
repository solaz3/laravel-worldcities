<?php

namespace Coldcoder\WorldCity;

use Illuminate\Support\ServiceProvider;

class WorldCityServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            if (!class_exists('CreateWorldsTable')) {
                $timestamp = date('Y_m_d_His', time());
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_worlds_table.php.stub' => database_path('migrations/' . $timestamp . '_create_worlds_table.php'),
                ], 'migrations');
            }

            if (!class_exists('WorldsTablesSeeder')) {
                $this->publishes([__DIR__ . '/../database/seeds/' => database_path('seeds')], 'seeds');
            }
            
            $this->publishes([
                __DIR__ . '/../config/worldcities.php' => config_path('worldcities.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
