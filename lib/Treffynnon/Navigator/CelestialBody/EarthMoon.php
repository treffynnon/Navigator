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
 * Set the statistics of the Earth's Moon for use in distance calculations
 * @see Treffynnon\Navigator\CelestialBody\CelestialBodyAbstract
 */
class EarthMoon extends CelestialBodyAbstract {

    /**
     * @var float in metres
     */
    public $equatorialRadius = 1738100;

    /**
     * @var float in metres
     */
    public $polarRadius = 1736000;

    /**
     * @var float in metres 
     */
    public $flattening = 0.00121;

    /**
     * @var float in kilometres
     */
    public $volumetricMeanRadius = 1737.1;

}