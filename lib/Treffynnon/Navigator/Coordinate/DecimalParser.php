<?php
namespace Treffynnon\Navigator\Coordinate;
/**
 * Parse decimal coordinate values to radians
 */
class DecimalParser extends ParserAbstract {
    /**
     * Convert a decimal coordinate to radians
     * @param float $coord
     * @return float
     */
    public function set($coord) {
        return deg2rad((float) $coord);
    }
    /**
     * Convert radians to a decimal coordinate
     * @param float $coord
     * @return float
     */
    public function get($coord) {
        return rad2deg($coord);
    }
}