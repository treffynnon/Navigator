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
 * A couple of alias functions for a shorter syntax when using the
 * converter objects that extend this abstract
 */
interface ConverterInterface {

    /**
     * Convert the supplied value using factor
     * @param float Value to be converted
     * @return mixed Converted value 
     */
    public function convert($distance);

    /**
     * Convert the supplied value by reversing the factor
     * @param float Value to be reverse converted
     * @return mixed Reversed value 
     */
    public function reverse($distance);

    /**
     * Convert the distance
     * @param float $distance
     * @return float 
     */
    public function c($distance);

    /**
     * Reverse the distance conversion
     * @param float $distance
     * @return float 
     */
    public function r($distance);

}
