<?php

namespace Treffynnon\Navigator\Distance\Converter;

class Kilometre implements UnitConversionInterface {

    /**
     * Convert the supplied value (in metres) to kilometres
     * @param float $distance
     * @return float 
     */
    public function convert($distance) {
        return $distance / 1000;
    }

}
