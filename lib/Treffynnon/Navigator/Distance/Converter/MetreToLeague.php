<?php

namespace Treffynnon\Navigator\Distance\Converter;

class MetreToLeague extends ConverterAbstract {

    const Factor = 0.000179985601;

    /**
     * Convert the supplied metres to leagues
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
