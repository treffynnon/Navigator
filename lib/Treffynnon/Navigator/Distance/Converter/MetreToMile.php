<?php

namespace Treffynnon\Navigator\Distance\Converter;

class MetreToMile extends ConverterAbstract {

    const Factor = 0.000621371192;

    /**
     * Convert the supplied metres to miles
     * @param float $distance in metres
     * @return float 
     */
    public static function convert($distance) {
        return $distance * static::Factor;
    }

    /**
     * Convert the supplied value in miles to metres
     * @param type $distance in miles
     * @return type 
     */
    public static function reverse($distance) {
        return $distance / static::Factor;
    }

}
