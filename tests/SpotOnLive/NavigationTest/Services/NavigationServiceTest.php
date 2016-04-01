<?php

namespace SpotOnMarketing\NavigationTest\Services;

use PHPUnit_Framework_TestCase;

class NavigationServiceTest extends PHPUnit_Framework_TestCase
{
    /** @var \SpotOnMarketing\Navigation\Services\NavigationService */
    protected $service;

    public function setUp()
    {
        $service = new \SpotOnMarketing\Navigation\Services\NavigationService([]);
        $this->service = $service;
    }

    public function testGetContainerNoContainer()
    {
        $name = 'container';
        $config = [
            'containers' => [

            ]
        ];

        $this->service->setConfig($config);

        $this->setExpectedException(
            'SpotOnMarketing\Navigation\Exceptions\ContainerException',
            sprintf('The container \'%s\' does not exist', $name)
        );

        $this->service->getContainer($name);
    }

    public function testGetContainer()
    {
        $name = 'container';
        $config = [
            'containers' => [
                'container' => [

                ]
            ]
        ];

        $this->service->setConfig($config);

        $result = $this->service->getContainer($name);

        $this->assertInstanceOf('SpotOnMarketing\Navigation\Navigation\Container', $result);
    }

    public function testAssertionClass()
    {
        $assertionClass = 'testAssertionClass';
        $this->service->setAssertionClass($assertionClass);

        $result = $this->service->getAssertionClass();

        $this->assertSame($assertionClass, $result);
    }

    public function testSetConfig()
    {
        $config = [
            'test' => 'config',
        ];

        $this->service->setConfig($config);

        $result = $this->service->getConfig();

        $this->assertSame($config, $result);
    }
}
