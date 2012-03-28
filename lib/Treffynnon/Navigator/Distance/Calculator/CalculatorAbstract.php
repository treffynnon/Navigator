<?php

namespace Treffynnon\Navigator\Distance\Calculator;

use Treffynnon\Navigator as N;

interface CalculatorInterface {

    /**
     * Calculate the distance between two coordinates
     * @return float Distance in metres
     */
    public function calculate(N\LatLong $point1, N\LatLong $point2);
}