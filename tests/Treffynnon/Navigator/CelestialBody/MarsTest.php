<?php

require_once 'CelestialBodyTestAbstract.php';

use Treffynnon\Navigator as N;
use Treffynnon\Navigator\Distance\Calculator as C;
use Treffynnon\Navigator\CelestialBody as CB;

class MarsTest extends CelestialBodyTestAbstract {

    public function getObject() {
        return new CB\Mars;
    }

    public function vincentyDataProvider() {
        $data = $this->getCoordinates();
        $results = array(
            array(3889587.0946715),
            array(5260463.2808461),
            array(5319042.1188342),
            array(5165145.786745),
            array(8852054.2764475),
            array(0),
            array(1808419.9672755),
        );
        return $this->mergeCoordArrays($data, $results);
    }

    public function cosineLawDataProvider() {
        $data = $this->getCoordinates();
        $results = array(
            array(3885636.8499087),
            array(5265056.214675),
            array(5324214.1496713),
            array(5167550.0749489),
            array(8873690.2494522),
            array(0),
            array(1810706.0956637),
        );
        return $this->mergeCoordArrays($data, $results);
    }

    public function haversineDataProvider() {
        $data = $this->getCoordinates();
        $results = array(
            array(3885636.8499087),
            array(5265056.214675),
            array(5324214.1496713),
            array(5167550.0749489),
            array(8873690.2494522),
            array(0),
            array(1810706.0956637),
        );
        return $this->mergeCoordArrays($data, $results);
    }

    public function greatCircleDataProvider() {
        $data = $this->getCoordinates();
        $results = array(
            array(3885636.8499087),
            array(5265056.214675),
            array(5324214.1496713),
            array(5167550.0749489),
            array(8873690.2494522),
            array(0),
            array(1810706.0956637),
        );
        return $this->mergeCoordArrays($data, $results);
    }

}