<?php

namespace SpotOnMarketing\NavigationTest\Helpers;

use PHPUnit_Framework_TestCase;

class NavigationHelperTest extends PHPUnit_Framework_TestCase
{
    /** @var \SpotOnMarketing\Navigation\Helpers\NavigationHelper */
    protected $helper;

    /** @var \SpotOnMarketing\Navigation\Services\NavigationService */
    protected $navigationService;

    public function setUp()
    {
        $navigationService = $this->getMockBuilder('SpotOnMarketing\Navigation\Services\NavigationService')
            ->disableOriginalConstructor()
            ->getMock();

        $this->navigationService = $navigationService;

        $helper = new \SpotOnMarketing\Navigation\Helpers\NavigationHelper($navigationService);
        $this->helper = $helper;
    }

    public function testGetContainer()
    {
        $name = "testContainer";
        $result = "container";

        $this->navigationService->expects($this->at(0))
            ->method('getContainer')
            ->with($name)
            ->willReturn($result);

        $return = $this->helper->getContainer($name);

        $this->assertSame($result, $return);
    }
}
