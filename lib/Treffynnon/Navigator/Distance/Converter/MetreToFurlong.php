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
 * Convert a value in metres to furlongs
 */
class MetreToFurlong extends ConverterAbstract {

    public $factor = 0.00497096954;

    /**
     * Convert the supplied metres to furlongs
     * @param float $distance in metres
     * @return float 
     */
    public function convert($distance) {
        return $distance * $this->factor;
    }

    /**
     * Convert the supplied value in leagues to metres
     * @param type $distance in leagues
     * @return type 
     */
    public function reverse($distance) {
        return $distance / $this->factor;
    }

}
