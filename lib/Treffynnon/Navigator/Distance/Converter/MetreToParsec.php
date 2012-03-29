<?php

namespace Treffynnon\Navigator\Distance\Converter;

class MetreToParsec extends ConverterAbstract {

    public $factor = 3.24077927001E-17;

    /**
     * Convert the supplied metres to furlongs
     * @param float $distance in metres
     * @return float 
     */
    public function convert($distance) {
        return $distance * $this->factor;
    }

    /**
     * Convert the supplied value in leagues to metres
     * @param type $distance in leagues
     * @return type 
     */
    public function reverse($distance) {
        return $distance / $this->factor;
    }

}
