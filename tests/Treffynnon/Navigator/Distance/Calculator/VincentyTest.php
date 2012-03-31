<?php

use Treffynnon\Navigator as N;
use Treffynnon\Navigator\Distance\Calculator as C;
use Treffynnon\Navigator\CelestialBody as CB;

class VincentyTest extends PHPUnit_Framework_TestCase {

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedCalculator() {
        $Vincenty = new C\Vincenty;
        $Vincenty->calculate(new stdClass, new stdClass);
    }

    public function testCalculate() {
        $Vincenty = new C\Vincenty;
        $point1 = new N\LatLong(new N\Coordinate(80.9), new N\Coordinate(20.1));
        $point2 = new N\LatLong(new N\Coordinate(20.1), new N\Coordinate(80.9));
        $metres = $Vincenty->calculate($point1, $point2);
        $this->assertEquals(7307755.5727136, $metres, '', 0.2);
    }

    public function testMarsCalculate() {
        $Vincenty = new C\Vincenty(new CB\Mars);
        $point1 = new N\LatLong(new N\Coordinate(80.9), new N\Coordinate(20.1));
        $point2 = new N\LatLong(new N\Coordinate(20.1), new N\Coordinate(80.9));
        $metres = $Vincenty->calculate($point1, $point2);
        $this->assertEquals(3889587.0946715, $metres, '', 0.2);
    }

    public function testEarthMoonCalculate() {
        $Vincenty = new C\Vincenty(new CB\EarthMoon);
        $point1 = new N\LatLong(new N\Coordinate(80.9), new N\Coordinate(20.1));
        $point2 = new N\LatLong(new N\Coordinate(20.1), new N\Coordinate(80.9));
        $metres = $Vincenty->calculate($point1, $point2);
        $this->assertEquals(1992124.7768471, $metres, '', 0.2);
    }
}