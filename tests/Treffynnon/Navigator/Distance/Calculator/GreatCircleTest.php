<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon\Navigator as N;
use Treffynnon\Navigator\Distance\Calculator as C;

class GreatCircleTest extends PHPUnit_Framework_TestCase {

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedCalculator() {
        $GreatCircle = new C\GreatCircle;
        $GreatCircle->calculate(new stdClass, new stdClass);
    }

    public function testCalculate() {
        $GreatCircle = new C\GreatCircle;
        $point1 = new N\LatLong(new N\Coordinate(80.9), new N\Coordinate(20.1));
        $point2 = new N\LatLong(new N\Coordinate(20.1), new N\Coordinate(80.9));
        $metres = $GreatCircle->calculate($point1, $point2);
        $this->assertEquals(7303552.8457791, $metres, '', 0.2);
    }

}