<?php

namespace Treffynnon\Navigator\Distance\Converter;

class MetreToNauticalMile extends ConverterAbstract {

    const Factor = 1852;
    
    /**
     * Convert the supplied metres to nautical miles
     * @param float $distance in metres
     * @return float 
     */
    public static function convert($distance) {
        return $distance / static::Factor;
    }

    /**
     * Convert the supplied value in nautical miles to metres
     * @param type $distance in nautical miles
     * @return type 
     */
    public static function reverse($distance) {
        return $distance * static::Factor;
    }

}
