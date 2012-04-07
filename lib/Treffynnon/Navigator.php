<?php

namespace Treffynnon;

use Treffynnon\Navigator\Coordinate as C;
use Treffynnon\Navigator\LatLong as L;
use Treffynnon\Navigator\Distance as D;

/**
 * Base manager class for setting up navigator calculations
 */
class Navigator {
    /**
     * Used to define a coordinate as a latitude
     * @var string
     */

    const Lat = 'Lat';
    /**
     * Used to define a coordinate as a longitude
     * @var string
     */
    const Long = 'Long';

    /**
     * Setup the autoloader to load the Treffynnon\Navigator library
     */
    public static function autoloader() {
        spl_autoload_register(array('self', '_autoloader'));
    }

    /**
     * Convert class names into file paths for inclusion
     * @param string $class_name
     */
    private static function _autoloader($class_name) {
        $class_path = realpath(__DIR__ . '/..') . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $class_name);
        require_once $class_path . '.php';
    }

    /**
     * Get a primed instance of the distance object
     * @param string|float $lat1
     * @param string|float $long1
     * @param string|float $lat2
     * @param string|float $long2
     * @return \Treffynnon\Navigator\Distance 
     */
    public static function distanceFactory($lat1, $long1, $lat2, $long2) {
        $point1 = new L(new C($lat1), new C($long1));
        $point2 = new L(new C($lat2), new C($long2));
        return new D($point1, $point2);
    }

    /**
     * Get the distance in metres
     * @param string|float $lat1
     * @param string|float $long1
     * @param string|float $lat2
     * @param string|float $long2
     * @return float 
     */
    public static function getDistance($lat1, $long1, $lat2, $long2) {
        return self::distanceFactory($lat1, $long1, $lat2, $long2)->get();
    }

}