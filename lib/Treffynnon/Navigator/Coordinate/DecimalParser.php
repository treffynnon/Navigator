<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */

namespace Treffynnon\Navigator\Coordinate;

/**
 * Parse decimal coordinate values to radians
 */
class DecimalParser extends ParserAbstract {

    /**
     * Convert a decimal coordinate to radians
     * @param float $coord
     * @return float
     */
    public function parse($coord) {
        return deg2rad((float) $coord);
    }

    /**
     * Convert radians to a decimal coordinate
     * @param float $coord
     * @return float
     */
    public function get($coord) {
        return rad2deg($coord);
    }

}