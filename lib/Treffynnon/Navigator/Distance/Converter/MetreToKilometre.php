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
 * Convert a value in metres to kilometres
 */
class MetreToKilometre extends ConverterAbstract {

    public $factor = 1000;

    /**
     * Convert the supplied metres to kilometres
     * @param float $distance in metres
     * @return float 
     */
    public function convert($distance) {
        return $distance / $this->factor;
    }

    /**
     * Convert the supplied kilometres into metres
     * @param float $distance in kilometres
     * @return float 
     */
    public function reverse($distance) {
        return $distance * $this->factor;
    }

}
