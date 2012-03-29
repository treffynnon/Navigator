<?php

namespace Treffynnon\Navigator\CelestialBody;

abstract class CelestialBodyAbstract {
    /**
     * @var float in metres 
     */
    public $minorSemiax;
    /**
     * @var float in metres
     */
    public $majorSemiax;
    /**
     * @var float in kilometres 
     */
    public $radius;
}
