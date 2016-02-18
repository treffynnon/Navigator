<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon\Navigator as N;

class DistanceTestUnder7 extends PHPUnit_Framework_TestCase {

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedGet() {
        $point1 = new N\LatLong(new N\Coordinate(80.9), new N\Coordinate(20.1));
        $point2 = new N\LatLong(new N\Coordinate(20.1), new N\Coordinate(80.9));
        $Distance = new N\Distance($point1, $point2);
        $metres = $Distance->get(new stdClass, new stdClass);
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedConstructor() {
        $Distance = new N\Distance(new stdClass, new stdClass);
    }

}
