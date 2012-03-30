<?php

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

    public function testMinorSemiax() {
        $CelestialBody = new CB\Earth;
        $this->assertClassHasAttribute('polarRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->polarRadius);
    }

    public function testMajorSemiax() {
        $CelestialBody = new CB\Earth;
        $this->assertClassHasAttribute('equatorialRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->equatorialRadius);
    }

}