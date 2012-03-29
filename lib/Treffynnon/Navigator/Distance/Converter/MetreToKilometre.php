<?php

namespace Treffynnon\Navigator\Distance\Converter;

class MetreToKilometre extends ConverterAbstract {

    public $factor = 1000;

    /**
     * Convert the supplied metres to kilometres
     * @param float $distance in metres
     * @return float 
     */
    public function convert($distance) {
        return $distance / $this->factor;
    }

    /**
     * Convert the supplied kilometres into metres
     * @param float $distance in kilometres
     * @return float 
     */
    public function reverse($distance) {
        return $distance * $this->factor;
    }

}
