<?php

use Treffynnon\Navigator\CelestialBody as CB;

class MarsTest extends PHPUnit_Framework_TestCase {

    public function testExtendsInterface() {
        $CelestialBody = new CB\Mars;
        $this->assertInstanceOf('Treffynnon\Navigator\CelestialBody\CelestialBodyAbstract', $CelestialBody);
    }

    public function testRadius() {
        $CelestialBody = new CB\Mars;
        $this->assertClassHasAttribute('volumetricMeanRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->volumetricMeanRadius);
    }

    public function testMinorSemiax() {
        $CelestialBody = new CB\Mars;
        $this->assertClassHasAttribute('polarRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->polarRadius);
    }

    public function testMajorSemiax() {
        $CelestialBody = new CB\Mars;
        $this->assertClassHasAttribute('equatorialRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->equatorialRadius);
    }

}