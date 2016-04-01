<?php

namespace SpotOnMarketing\Navigation\Helpers;

use SpotOnMarketing\Navigation\Services\NavigationService;
use SpotOnMarketing\Navigation\Services\NavigationServiceInterface;

class NavigationHelper
{
    /** @var NavigationService */
    protected $navigationService;

    public function __construct(NavigationServiceInterface $navigationService)
    {
        $this->navigationService = $navigationService;
    }

    /**
     * Get container from name
     *
     * @param string $name
     * @return \SpotOnMarketing\Navigation\Navigation\Container
     */
    public function getContainer($name)
    {
        return $this->navigationService->getContainer($name);
    }
}
