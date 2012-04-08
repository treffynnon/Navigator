<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */

namespace Treffynnon\Navigator\Distance\Calculator;

use Treffynnon\Navigator as N;
use Treffynnon\Navigator\CelestialBody as CB;

/**
 * Use the Haversine formula to calculate the distance between
 * two points
 */
class Haversine extends CalculatorAbstract {

    /**
     * Calculate the distance between two
     * points using the Haversine formula.
     *
     * Supply instances of the coordinate class.
     * 
     * http://en.wikipedia.org/wiki/Haversine_formula
     *
     * @param Treffynnon\Navigator\Coordinate $point1
     * @param Treffynnon\Navigator\Coordinate $point2
     * @return float
     */
    public function calculate(N\LatLong $point1, N\LatLong $point2) {
        $celestialBody = $this->getCelestialBody();
        $deltaLat = $point2->getLatitude()->get() - $point1->getLatitude()->get();
        $deltaLong = $point2->getLongitude()->get() - $point1->getLongitude()->get();
        $a = sin($deltaLat / 2) * sin($deltaLat / 2) + cos($point1->getLatitude()->get()) * cos($point2->getLatitude()->get()) * sin($deltaLong / 2) * sin($deltaLong / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $d = $celestialBody->volumetricMeanRadius * $c * 1000;
        return $d;
    }

}