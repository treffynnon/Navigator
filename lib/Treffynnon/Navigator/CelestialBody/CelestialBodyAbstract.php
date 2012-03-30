<?php

namespace Treffynnon\Navigator\CelestialBody;

abstract class CelestialBodyAbstract {

    /**
     * @var float in metres 
     */
    public $equatorialRadius;

    /**
     * This can be obtained from equatorial radius and flattening using the
     * following formula:
     * 
     * polarRadius = equatorialRadius * (1 - flattening)
     * 
     * @var float in metres
     */
    public $polarRadius;

    /**
     * This can be obtained from inverse flattening by applying the following
     * formula where f is inverse flattening:
     * 
     * flattening = f/1
     * 
     * If inverse flattening is unknown then flattening can be obtained with
     * following formula:
     * 
     * flattening = (equatorialRadius - polarRadius) / equatorialRadius
     * 
     * @var float
     */
    public $flattening;

    /**
     * @var float in kilometres 
     */
    public $volumetricMeanRadius;

}
