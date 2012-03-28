<?php

namespace Treffynnon\Navigator\Distance\Converter;

interface UnitConversionInterface {

    /**
     * @param float Distance in metres 
     */
    public function convert($distance);
}