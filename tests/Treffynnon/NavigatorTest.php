<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */

use Treffynnon\Navigator as N;

class NavigatorTest extends PHPUnit_Framework_TestCase {

    public function testStaticAttributes() {
        $this->assertEquals('Lat', N::Lat);
        $this->assertEquals('Long', N::Long);
    }

    /**
     * @dataProvider pointsDataProvider 
     */
    public function testGetDistance($lat1, $long1, $lat2, $long2) {
        $distance = N::getDistance($lat1, $long1, $lat2, $long2);
        $this->assertRegExp('/[\d.]*/', (string) $distance);
    }

    /**
     * @dataProvider pointsDataProvider 
     */
    public function testDistanceFactory($lat1, $long1, $lat2, $long2) {
        $Distance = N::distanceFactory($lat1, $long1, $lat2, $long2);
        $this->assertInstanceOf('Treffynnon\Navigator\Distance', $Distance);
    }

    public function pointsDataProvider() {
        return NavigatorTestData::pointsData_valid();
    }

    public function testAutoloader() {
        $this->assertTrue(N::autoloader());
    }

}