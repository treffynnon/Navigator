<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */

namespace Treffynnon\Navigator;

use Treffynnon\Navigator\Distance as D;

class Distance {

    /**
     * The first coordinate
     * @var N\LatLong
     */
    protected $point1 = null;

    /**
     * The second coordinate
     * @var N\LatLong
     */
    protected $point2 = null;

    /**
     * Instantiate the distance object and supply the two coordinates to
     * calculate the distance between them
     * @param LatLong $point1
     * @param LatLong $point2
     */
    public function __construct(LatLong $point1, LatLong $point2) {
        $this->point1 = $point1;
        $this->point2 = $point2;
    }

    /**
     * Calculate the distance between two points. Defaults to Vincenty if
     * no calculator is supplied. If no unit converter is supplied then the
     * formula will return a value in metres.
     * @param D\Calculator\CalculatorInterface $calculator
     * @param D\Calculator\ConverterAbstract $unit_converter
     * @return float
     */
    public function get(D\Calculator\CalculatorAbstract $calculator = null, D\Converter\ConverterAbstract $unit_converter = null) {
        if (is_null($calculator)) {
            $calculator = new D\Calculator\Vincenty;
        }

        $distance = $calculator->calculate($this->point1, $this->point2);

        if (!is_null($unit_converter)) {
            $distance = $unit_converter->convert($distance);
        }
        return $distance;
    }

}