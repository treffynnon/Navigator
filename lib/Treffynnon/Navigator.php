<?php

namespace Treffynnon;

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
    public function __construct() {
        spl_autoload_register(array($this, 'autoloader'));
    }

    /**
     * Convert class names into file paths for inclusion
     * @param string $class_name
     */
    private function autoloader($class_name) {
        $class_path = realpath(__DIR__ . '/..') . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $class_name);
        require_once $class_path . '.php';
    }

}

class InvalidCoordinateFormatException extends \Exception {
    
}

class InvalidDirectionException extends \Exception {
    
}