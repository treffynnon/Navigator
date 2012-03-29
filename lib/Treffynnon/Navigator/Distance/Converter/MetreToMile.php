<?php

namespace Treffynnon\Navigator\Distance\Converter;

class MetreToMile extends ConverterAbstract {

    public $factor = 0.000621371192;

    /**
     * Convert the supplied metres to miles
     * @param float $distance in metres
     * @return float 
     */
    public function convert($distance) {
        return $distance * $this->factor;
    }

    /**
     * Convert the supplied value in miles to metres
     * @param type $distance in miles
     * @return type 
     */
    public function reverse($distance) {
        return $distance / $this->factor;
    }

}
