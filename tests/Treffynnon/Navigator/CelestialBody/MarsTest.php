<?php

use Treffynnon\Navigator as N;
use Treffynnon\Navigator\Distance\Calculator as C;
use Treffynnon\Navigator\CelestialBody as CB;

class MarsTest extends PHPUnit_Framework_TestCase {

    public function testExtendsInterface() {
        $CelestialBody = new CB\Mars;
        $this->assertInstanceOf('Treffynnon\Navigator\CelestialBody\CelestialBodyAbstract', $CelestialBody);
    }

    public function testVolumetricMeanRadius() {
        $CelestialBody = new CB\Mars;
        $this->assertClassHasAttribute('volumetricMeanRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->volumetricMeanRadius);
    }

    public function testPolarRadius() {
        $CelestialBody = new CB\Mars;
        $this->assertClassHasAttribute('polarRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->polarRadius);
    }

    public function testEquatorialRadius() {
        $CelestialBody = new CB\Mars;
        $this->assertClassHasAttribute('equatorialRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->equatorialRadius);
    }

    public function testVincentyCalculate() {
        $Vincenty = new C\Vincenty(new CB\Mars);
        $point1 = new N\LatLong(new N\Coordinate(80.9), new N\Coordinate(20.1));
        $point2 = new N\LatLong(new N\Coordinate(20.1), new N\Coordinate(80.9));
        $metres = $Vincenty->calculate($point1, $point2);
        $this->assertEquals(3889587.0946715, $metres, '', 0.2);
    }

    public function vincentyDataProvider() {
        $data = $this->baseVincentyDataProvider();
        return array(
            array(80.9, 20.1, 20.1, 80.9, 3889587.0946715),
        );
    }

}