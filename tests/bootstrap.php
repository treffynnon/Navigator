<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */

require_once __DIR__ . '/../lib/Treffynnon/Navigator.php';

use Treffynnon\Navigator as N;

N::autoloader();

/**
 * Base set of data to use for testing
 */
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
            array(181),
        );
    }

    public static function coordData_decimal_long_invalid() {
        return self::coordData_decimal_invalid();
    }

    public static function coordData_decimal_lat_invalid() {
        $invalid = array(array(91), array(-91));
        return $invalid + self::coordData_decimal_invalid();
    }

    public static function coordData_dms_valid() {
        return array(
            array('31 34 1.200000S'),
            array('134° 40\' 40"E'),
            array('89° 40\' 40"N'),
            array('10° 36\' 12"S'),
            array('76 21 19.213459S'),
            array('1 1 1N'),
            array('167 20 10.16586965W'),
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
            array(N::Lat),
            array(N::Long),
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

    public static function pointsData_valid() {
        return array(
            array(80.9, 20.1, 20.1, 80.9),
            array(1, 2, 90, 60),
            array(90, 180, -180, -90),
            array(23, 12, -20, 90),
            array(-90, -13, 60, -34),
            array(1, 1, 1, 1),
            array(-2, -5, -19, 21),
        );
    }

}
