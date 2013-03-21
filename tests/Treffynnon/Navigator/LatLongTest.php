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

    public function testToString() {
        $latitude = new N\Coordinate(42.77);
        $longitude = new N\Coordinate(-2.86844);
        $LatLong = new N\LatLong($latitude, $longitude);
        $this->assertEquals($latitude . ',' . $longitude, (string) $LatLong);
    }

    public function testFromString() {
        $latitude = '42.77';
        $longitude = '-2.86844';
        $LatLong = N\LatLong::createFromString($latitude . ',' . $longitude);
        $this->assertInstanceOf('Treffynnon\Navigator\LatLong', $LatLong);
        $this->assertEquals($latitude, (string) $LatLong->getLatitude());
        $this->assertEquals($longitude, (string) $LatLong->getLongitude());
    }

}
