<?php

namespace Treffynnon\Navigator\Distance\Converter;

abstract class ConverterAbstract {

    /**
     * @param float Value to be converted
     * @param mixed Converted value 
     */
    abstract public static function convert($distance);

    /**
     * @param float Value to be reverse converted
     * @param mixed Reversed value 
     */
    abstract public static function reverse($distance);

    public static function c($distance) {
        return static::convert($distance);
    }

    public static function r($distance) {
        return static::reverse($distance);
    }
}