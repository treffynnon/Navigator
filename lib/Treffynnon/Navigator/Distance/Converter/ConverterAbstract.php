<?php

namespace Treffynnon\Navigator\Distance\Converter;

abstract class ConverterAbstract {

    /**
     * @param float Value to be converted
     * @param mixed Converted value 
     */
    abstract public function convert($distance);

    /**
     * @param float Value to be reverse converted
     * @param mixed Reversed value 
     */
    abstract public function reverse($distance);

    /**
     * Convert the distance
     * @param float $distance
     * @return float 
     */
    public function c($distance) {
        return $this->convert($distance);
    }

    /**
     * Reverse the distance conversion
     * @param float $distance
     * @return float 
     */
    public function r($distance) {
        return $this->reverse($distance);
    }
}