<?php

namespace Treffynnon\Navigator\CelestialBody;

class Earth extends CelestialBodyAbstract {

    /**
     * @var float in metres
     */
    public $majorSemiax = 6378137.0;

    /**
     * @var float in metres
     */
    public $minorSemiax = 6356752.31424518;

    /**
     * @var float in kilometres
     */
    public $radius = 6371;

}