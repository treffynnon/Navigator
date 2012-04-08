<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
require_once 'CelestialBodyTestAbstract.php';

use Treffynnon\Navigator as N;
use Treffynnon\Navigator\Distance\Calculator as C;
use Treffynnon\Navigator\CelestialBody as CB;

class EarthTest extends CelestialBodyTestAbstract {

    public function getObject() {
        return new CB\Earth;
    }

    public function vincentyDataProvider() {
        $data = $this->getCoordinates();
        $results = array(
            array(7307755.5727325),
            array(9891391.3407533),
            array(10001965.729312),
            array(9710417.9698879),
            array(16656038.548816),
            array(0),
            array(3400977.2232827),
        );
        return $this->mergeCoordArrays($data, $results);
    }

    public function cosineLawDataProvider() {
        $data = $this->getCoordinates();
        $results = array(
            array(7303552.8457791),
            array(9896348.4713657),
            array(10007543.39801),
            array(9713073.1752468),
            array(16679238.996684),
            array(0),
            array(3403454.3547642),
        );
        return $this->mergeCoordArrays($data, $results);
    }

    public function haversineDataProvider() {
        $data = $this->getCoordinates();
        $results = array(
            array(7303552.8457791),
            array(9896348.4713657),
            array(10007543.39801),
            array(9713073.1752468),
            array(16679238.996684),
            array(0),
            array(3403454.3547642),
        );
        return $this->mergeCoordArrays($data, $results);
    }

    public function greatCircleDataProvider() {
        $data = $this->getCoordinates();
        $results = array(
            array(7303552.8457791),
            array(9896348.4713657),
            array(10007543.39801),
            array(9713073.1752468),
            array(16679238.996684),
            array(0),
            array(3403454.3547642),
        );
        return $this->mergeCoordArrays($data, $results);
    }

}