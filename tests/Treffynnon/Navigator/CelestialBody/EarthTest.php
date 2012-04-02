<?php

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