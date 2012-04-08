<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */

namespace Treffynnon\Navigator\CelestialBody;

/**
 * Set the Mars statistics for use in distance calculations
 * @see Treffynnon\Navigator\CelestialBody\CelestialBodyAbstract
 */
class Mars extends CelestialBodyAbstract {

    /**
     * @var float in metres
     */
    public $equatorialRadius = 3396200;

    /**
     * @var float in metres
     */
    public $polarRadius = 3376200;

    /**
     * @var float in metres 
     */
    public $flattening = 0.00589;

    /**
     * @var float in kilometres
     */
    public $volumetricMeanRadius = 3389.5;

}