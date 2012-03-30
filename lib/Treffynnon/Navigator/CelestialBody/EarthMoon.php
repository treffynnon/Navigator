<?php

namespace Treffynnon\Navigator\CelestialBody;

class EarthMoon extends CelestialBodyAbstract {

    /**
     * @var float in metres
     */
    public $equatorialRadius = 1738100;

    /**
     * @var float in metres
     */
    public $polarRadius = 1736000;

    /**
     * @var float in metres 
     */
    public $flattening = 0.00121;

    /**
     * @var float in kilometres
     */
    public $volumetricMeanRadius = 1737.1;

}