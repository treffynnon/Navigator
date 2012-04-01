<?php

use Treffynnon\Navigator as N;
use Treffynnon\Navigator\Distance\Calculator as C;
use Treffynnon\Navigator\CelestialBody as CB;

class EarthTest extends PHPUnit_Framework_TestCase {

    public function testExtendsInterface() {
        $CelestialBody = new CB\Earth;
        $this->assertInstanceOf('Treffynnon\Navigator\CelestialBody\CelestialBodyAbstract', $CelestialBody);
    }

    public function testRadius() {
        $CelestialBody = new CB\Earth;
        $this->assertClassHasAttribute('volumetricMeanRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->volumetricMeanRadius);
    }

    public function testPolarRadius() {
        $CelestialBody = new CB\Earth;
        $this->assertClassHasAttribute('polarRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->polarRadius);
    }

    public function testEquatorialRadius() {
        $CelestialBody = new CB\Earth;
        $this->assertClassHasAttribute('equatorialRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->equatorialRadius);
    }

    public function testVincentyCalculate() {
        $Vincenty = new C\Vincenty(new CB\Earth);
        $point1 = new N\LatLong(new N\Coordinate(80.9), new N\Coordinate(20.1));
        $point2 = new N\LatLong(new N\Coordinate(20.1), new N\Coordinate(80.9));
        $metres = $Vincenty->calculate($point1, $point2);
        $this->assertEquals(7307755.5727136, $metres, '', 0.2);
    }

}