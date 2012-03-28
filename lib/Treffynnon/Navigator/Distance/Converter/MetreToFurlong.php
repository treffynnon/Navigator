<?php

namespace Treffynnon\Navigator\Distance\Converter;

class MetreToFurlong extends ConverterAbstract {

    const Factor = 0.00497096954;

    /**
     * Convert the supplied metres to furlongs
     * @param float $distance in metres
     * @return float 
     */
    public static function convert($distance) {
        return $distance * static::Factor;
    }

    /**
     * Convert the supplied value in leagues to metres
     * @param type $distance in leagues
     * @return type 
     */
    public static function reverse($distance) {
        return $distance / static::Factor;
    }

}
