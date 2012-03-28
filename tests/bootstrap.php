<?php

require_once __DIR__ . '/../lib/Treffynnon/Navigator.php';

use Treffynnon as T;

$Navigator = new T\Navigator;

$LatLng = new T\Navigator\LatLong(
    new T\Navigator\Coordinate(60.9),
    new T\Navigator\Coordinate(10.2)
);
$LatLng2 = new T\Navigator\LatLong(
    new T\Navigator\Coordinate(10.2),
    new T\Navigator\Coordinate(60.9)
);

$Distance = new T\Navigator\Distance($LatLng, $LatLng2);
$TheMoon = new T\Navigator\CelestialBody\EarthMoon;
$Calculator = new T\Navigator\Distance\Calculator\Vincenty($TheMoon);

var_dump($Distance->get($Calculator));

die();


class NavigatorTestData {

    public static function coordData_decimal_valid() {
        return array(
            array(23.03),
            array(55.09),
            array(60.08),
            array(1.03),
            array(0.1),
            array(10),
        );
    }

    public static function coordData_decimal_invalid() {
        return array(
            array(365),
            array(10000.0981),
            array(-200),
            array(-181),
            array(185),
        );
    }

    public static function coordData_dms_valid() {
        return array(
            array('31 34 1.200000S'),
            array('134° 40\' 40"E'),
            array('89° 40\' 40"N'),
            array('10° 36\' 12"S'),
            array('76 21 19.213459S'),
        );
    }

    public static function coordData_dms_invalid() {
        return array(
            array(365),
            array(10000.0981),
            array(-200),
            array(-181),
            array(185),
        );
    }

    public static function coordDirectionData_valid() {
        return array(
            array(T\Navigator::Lat),
            array(T\Navigator::Long),
        );
    }

    public static function coordDirectionData_invalid() {
        return array(
            array('Test'),
            array('Another Invalid value'),
            array(56),
        );
    }

    public static function distanceData() {
        return array(
            array(2356.12466),
            array(100.98),
            array(1000),
            array(45604.3246578)
        );
    }

}