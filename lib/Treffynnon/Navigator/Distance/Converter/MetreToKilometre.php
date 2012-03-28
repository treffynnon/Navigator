<?php

namespace Treffynnon\Navigator\Distance\Converter;

class MetreToKilometre extends ConverterAbstract {

    const Factor = 1000;

    /**
     * Convert the supplied metres to kilometres
     * @param float $distance in metres
     * @return float 
     */
    public static function convert($distance) {
        return $distance / static::Factor;
    }

    /**
     * Convert the supplied kilometres into metres
     * @param float $distance in kilometres
     * @return float 
     */
    public static function reverse($distance) {
        return $distance * static::Factor;
    }

}
