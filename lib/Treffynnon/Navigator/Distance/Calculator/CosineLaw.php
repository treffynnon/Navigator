<?php

namespace Treffynnon\Navigator\Distance\Calculator;

use Treffynnon\Navigator as N;
use Treffynnon\Navigator\CelestialBody as CB;

class CosineLaw extends CalculatorAbstract {

    /**
     * Calculate the distance between two
     * points using Cosine Law.
     *
     * Supply instances of the coordinate class.
     * 
     * http://en.wikipedia.org/wiki/Cosine_law
     *
     * @param Treffynnon\Navigator\Coordinate $point1
     * @param Treffynnon\Navigator\Coordinate $point2
     * @return float
     */
    public function calculate(N\LatLong $point1, N\LatLong $point2) {
        $celestialBody = $this->getCelestialBody();
        $d = acos(sin($point1->getLatitude()->get()) * sin($point2->getLatitude()->get()) + 
                  cos($point1->getLatitude()->get()) * cos($point2->getLatitude()->get()) * 
                  cos($point2->getLongitude()->get() - $point1->getLongitude()->get())) * 
             $celestialBody->radius;
        return $d * 1000;
    }

}