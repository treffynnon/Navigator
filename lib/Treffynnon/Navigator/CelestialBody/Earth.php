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
 * Set the Earth statistics for use in distance calculations
 * @see Treffynnon\Navigator\CelestialBody\CelestialBodyAbstract
 */
class Earth extends CelestialBodyAbstract {

    /**
     * @var float in metres
     */
    public $equatorialRadius = 6378137.0;

    /**
     * @var float in metres
     */
    public $polarRadius = 6356752.31424518;

    /**
     * @var float in metres 
     */
    public $flattening = 0.00335281066;

    /**
     * @var float in kilometres
     */
    public $volumetricMeanRadius = 6371;

}