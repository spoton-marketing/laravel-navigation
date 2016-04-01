<?php

namespace SpotOnMarketing\Navigation\Facades\Helpers;

use Illuminate\Support\Facades\Facade;
use SpotOnMarketing\Navigation\Helpers\NavigationHelper;

class NavigationHelperFacade extends Facade
{
    /**
     * Name of the binding container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return NavigationHelper::class;
    }
}
