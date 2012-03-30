<?php

namespace Treffynnon\Navigator\CelestialBody;

class Earth extends CelestialBodyAbstract {

    /**
     * @var float in metres
     */
    public $equatorialRadius = 6378137.0;

    /**
     * @var float in metres
     */
    public $polarRadius = 6356752.31424518;

    /**
     * @var float in metres 
     */
    public $flattening = 0.00335281066;

    /**
     * @var float in kilometres
     */
    public $volumetricMeanRadius = 6371;

}