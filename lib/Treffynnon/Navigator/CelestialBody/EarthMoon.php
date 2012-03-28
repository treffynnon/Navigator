<?php

namespace Treffynnon\Navigator\CelestialBody;

class EarthMoon implements CelestialBodyInterface {
    /**
     * @var float in metres
     */
    public $majorSemiax = 384400000;
    /**
     * @var float in metres
     */
    public $minorSemiax = 383800000;
    /**
     * @var float in kilometres
     */
    public $radius = 1738.14;

}