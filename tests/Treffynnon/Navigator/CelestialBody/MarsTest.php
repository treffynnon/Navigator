<?php

use Treffynnon\Navigator\CelestialBody as CB;

class MarsTest extends PHPUnit_Framework_TestCase {

    public function testExtendsInterface() {
        $CelestialBody = new CB\Mars;
        $this->assertInstanceOf('Treffynnon\Navigator\CelestialBody\CelestialBodyAbstract', $CelestialBody);
    }

    public function testRadius() {
        $CelestialBody = new CB\Mars;
        $this->assertClassHasAttribute('radius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->radius);
    }

    public function testMinorSemiax() {
        $CelestialBody = new CB\Mars;
        $this->assertClassHasAttribute('minorSemiax', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->minorSemiax);
    }

    public function testMajorSemiax() {
        $CelestialBody = new CB\Mars;
        $this->assertClassHasAttribute('majorSemiax', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->majorSemiax);
    }

}