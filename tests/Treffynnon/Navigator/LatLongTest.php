<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon as T;
use Treffynnon\Navigator as N;
use Treffynnon\Navigator\Coordinate as C;

class LatLongTest extends PHPUnit_Framework_TestCase {

    public function testConstructor() {
        $latitude = new N\Coordinate(10.03);
        $longitude = new N\Coordinate('10 10 1.2S', new C\DmsParser);
        $LatLong = new N\LatLong($latitude, $longitude);
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testInvalidConstructor() {
        $LatLong = new N\LatLong('test', 'test');
    }

    public function testPrimeCoordinateParsers() {
        $latitude = new N\Coordinate(10.03);
        $longitude = new N\Coordinate('10 10 1.2S', new C\DmsParser);
        $LatLong = new N\LatLong($latitude, $longitude);

        $this->assertEquals(
            $LatLong->getLongitude()->getParser()->getDirection(), T\Navigator::Long
        );
        $this->assertEquals(
            $LatLong->getLatitude()->getParser()->getDirection(), T\Navigator::Lat
        );
    }

}