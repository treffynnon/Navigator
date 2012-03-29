<?php

namespace Treffynnon\Navigator\Distance\Converter;

class MetreToLeague extends ConverterAbstract {

    public $factor = 0.000179985601;

    /**
     * Convert the supplied metres to leagues
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
