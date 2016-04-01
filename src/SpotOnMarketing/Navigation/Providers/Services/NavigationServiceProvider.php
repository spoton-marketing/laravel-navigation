<?php

/**
 * Dynamic navigation for Laravel 5+
 *
 * @license MIT
 * @package SpotOnMarketing\Navigation
 */

namespace SpotOnMarketing\Navigation\Providers\Services;

use Illuminate\Support\ServiceProvider;
use SpotOnMarketing\Navigation\Exceptions\IllegalConfigurationException;
use SpotOnMarketing\Navigation\Services\NavigationService;

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Boot
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../../../config/config.php' => config_path('navigation.php'),
        ]);
    }

    /**
     * Register service
     */
    public function register()
    {
        $this->app->bind(NavigationService::class, function () {
            $navigationConfig = config('navigation');

            if (is_null($navigationConfig)) {
                throw new IllegalConfigurationException('Please run \'php artisan vendor:publish\'');
            }

            return new NavigationService($navigationConfig);
        });

        $this->mergeConfig();
    }

    /**
     * Merge config
     */
    private function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../../../config/config.php',
            'navigation'
        );
    }
}
