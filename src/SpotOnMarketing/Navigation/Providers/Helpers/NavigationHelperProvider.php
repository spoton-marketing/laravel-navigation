<?php

/**
 * Dynamic navigation for Laravel 5+
 *
 * @license MIT
 * @package SpotOnMarketing\Assertions
 */

namespace SpotOnMarketing\Navigation\Providers\Helpers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;
use SpotOnMarketing\Navigation\Helpers\NavigationHelper;
use SpotOnMarketing\Navigation\Services\NavigationService;

class NavigationHelperProvider extends ServiceProvider
{
    /**
     * Register navigation helper
     */
    public function register()
    {
        $this->app->bind(NavigationHelper::class, function (Application $application) {
            /** @var \SpotOnMarketing\Navigation\Services\NavigationServiceInterface $navigationService */
            $navigationService = $application->make(NavigationService::class);

            return new NavigationHelper($navigationService);
        });
    }
}
