<?php

namespace SpotOnMarketing\Navigation\Services;

interface NavigationServiceInterface
{
    /**
     * Get container from name
     *
     * @param $name
     * @return \SpotOnMarketing\Navigation\Navigation\Container
     * @throws \SpotOnMarketing\Navigation\Exceptions\ContainerException
     */
    public function getContainer($name);
}
