<?php

namespace Treffynnon\Navigator\Distance\Converter;

class MetreToNauticalMile extends ConverterAbstract {

    public $factor = 1852;
    
    /**
     * Convert the supplied metres to nautical miles
     * @param float $distance in metres
     * @return float 
     */
    public function convert($distance) {
        return $distance / $this->factor;
    }

    /**
     * Convert the supplied value in nautical miles to metres
     * @param type $distance in nautical miles
     * @return type 
     */
    public function reverse($distance) {
        return $distance * $this->factor;
    }

}
