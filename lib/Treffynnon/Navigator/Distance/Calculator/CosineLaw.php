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
 * Use the Cosine Law to calculate the distance between two points 
 */
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
            $celestialBody->volumetricMeanRadius;
        return $d * 1000;
    }

}