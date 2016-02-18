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
abstract class ConverterAbstract implements ConverterInterface {

    /**
     * @var mixed A conversion factor to use
     */
    public $factor = 1;

    /**
     * @inheritdoc
     */
    public function convert($distance) {
        return $distance * $this->factor;
    }

    /**
     * @inheritdoc
     */
    public function reverse($distance) {
        return $distance / $this->factor;
    }

    /**
     * @inheritdoc
     */
    public function c($distance) {
        return $this->convert($distance);
    }

    /**
     * @inheritdoc
     */
    public function r($distance) {
        return $this->reverse($distance);
    }

}
