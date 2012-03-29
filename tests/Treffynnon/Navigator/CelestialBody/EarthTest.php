<?php

use Treffynnon\Navigator\CelestialBody as CB;

class EarthTest extends PHPUnit_Framework_TestCase {

    public function testExtendsInterface() {
        $CelestialBody = new CB\Earth;
        $this->assertInstanceOf('Treffynnon\Navigator\CelestialBody\CelestialBodyAbstract', $CelestialBody);
    }

    public function testRadius() {
        $CelestialBody = new CB\Earth;
        $this->assertClassHasAttribute('radius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->radius);
    }

    public function testMinorSemiax() {
        $CelestialBody = new CB\Earth;
        $this->assertClassHasAttribute('minorSemiax', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->minorSemiax);
    }

    public function testMajorSemiax() {
        $CelestialBody = new CB\Earth;
        $this->assertClassHasAttribute('majorSemiax', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->majorSemiax);
    }

}