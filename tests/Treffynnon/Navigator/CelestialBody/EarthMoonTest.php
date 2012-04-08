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

class EarthMoonTest extends CelestialBodyTestAbstract {

    public function getObject() {
        return new CB\EarthMoon;
    }

    public function vincentyDataProvider() {
        $data = $this->getCoordinates();
        $results = array(
            array(1992124.7768471),
            array(2698289.7434361),
            array(2728552.0087039),
            array(2648535.3270465),
            array(4546220.8311114),
            array(0),
            array(927892.62513723),
        );
        return $this->mergeCoordArrays($data, $results);
    }

    public function cosineLawDataProvider() {
        $data = $this->getCoordinates();
        $results = array(
            array(1991367.3910537),
            array(2698312.184839),
            array(2728630.2992754),
            array(2648340.8276128),
            array(4547717.165459),
            array(0),
            array(927976.85758293),
        );
        return $this->mergeCoordArrays($data, $results);
    }

    public function haversineDataProvider() {
        $data = $this->getCoordinates();
        $results = array(
            array(1991367.3910537),
            array(2698312.184839),
            array(2728630.2992754),
            array(2648340.8276128),
            array(4547717.165459),
            array(0),
            array(927976.85758293),
        );
        return $this->mergeCoordArrays($data, $results);
    }

    public function greatCircleDataProvider() {
        $data = $this->getCoordinates();
        $results = array(
            array(1991367.3910537),
            array(2698312.184839),
            array(2728630.2992754),
            array(2648340.8276128),
            array(4547717.165459),
            array(0),
            array(927976.85758293),
        );
        return $this->mergeCoordArrays($data, $results);
    }

}