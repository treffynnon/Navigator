<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */

namespace Treffynnon\Navigator\Distance\Converter;

/**
 * Convert a value in metres to nautical miles 
 */
class MetreToNauticalMile extends ConverterAbstract {

    public $factor = 1852;

    /**
     * Convert the supplied metres to nautical miles
     * @param float $distance in metres
     * @return float 
     */
    public function convert($distance) {
        return $distance / $this->factor;
    }

    /**
     * Convert the supplied value in nautical miles to metres
     * @param type $distance in nautical miles
     * @return type 
     */
    public function reverse($distance) {
        return $distance * $this->factor;
    }

}
