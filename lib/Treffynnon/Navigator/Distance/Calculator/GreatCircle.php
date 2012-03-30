<?php

namespace Treffynnon\Navigator\Distance\Calculator;

use Treffynnon\Navigator as N;
use Treffynnon\Navigator\CelestialBody as CB;

class GreatCircle extends CalculatorAbstract {

    /**
     * Calculate the distance between two
     * points using the Great Circle formula.
     *
     * Supply instances of the coordinate class.
     * 
     * http://www.ga.gov.au/earth-monitoring/geodesy/geodetic-techniques/distance-calculation-algorithms.html#circle
     *
     * @param Treffynnon\Navigator\Coordinate $point1
     * @param Treffynnon\Navigator\Coordinate $point2
     * @return float
     */
    public function calculate(N\LatLong $point1, N\LatLong $point2) {
        $celestialBody = $this->getCelestialBody();
        $degrees = acos(sin($point1->getLatitude()->get()) * 
                        sin($point2->getLatitude()->get()) + 
                        cos($point1->getLatitude()->get()) * 
                        cos($point2->getLatitude()->get()) * 
                        cos($point2->getLongitude()->get() - 
                            $point1->getLongitude()->get()));
        $d = $degrees * $celestialBody->volumetricMeanRadius;
        return $d * 1000;
    }

}