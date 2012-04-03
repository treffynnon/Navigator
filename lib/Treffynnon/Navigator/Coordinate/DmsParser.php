<?php

namespace Treffynnon\Navigator\Coordinate;

/**
 * Parse a Degrees, Minutes and Seconds notation coordinate to radians
 */
class DmsParser extends ParserAbstract {

    /**
     * A regular expression to run on the DMS string to extract its component
     * parts
     * @var string
     */
    protected $input_format = '/(\d{1,3})°? (\d{1,2})\'? (\d{1,2}\.?\d*)"?([N,S,E,W])/u';

    /**
     * The sprintf output format to use when printing the value
     * @var string
     */
    protected $output_format = '%d %d %F%s';

    /**
     * Used when setting a value in the Coordinate class.
     * @param string $coord
     * @return float
     */
    public function parse($coord) {
        $coordinate = null;
        $matches = array();
        preg_match($this->input_format, $coord, $matches);
        if (count($matches) == 5) {
            $degrees = $matches[1];
            $minutes = $matches[2] * (1 / 60);
            $seconds = $matches[3] * (1 / 60 * 1 / 60);

            $coordinate = '';
            if (isset($matches[4])) {
                if ($matches[4] == 'S' or $matches[4] == 'W') {
                    $coordinate = '-';
                }
            }

            $coordinate .= $degrees + $minutes + $seconds;
        }
        if (is_numeric($coordinate)) {
            return deg2rad((float) $coordinate);
        }
        throw new \Treffynnon\InvalidCoordinateFormatException('The format of "' . $coord . '" cannot be parsed');
    }

    /**
     * Get a string representation of the coordinate in DMS notation
     * @param float $coord
     * @return string
     */
    public function get($coord) {
        $coord = rad2deg($coord);
        $degrees = (integer) $coord;
        $compass = '';
        if ($this->direction == \Treffynnon\Navigator::Lat) {
            if ($degrees < 0)
                $compass = 'S';
            elseif ($degrees > 0)
                $compass = 'N';
        }elseif ($this->direction == \Treffynnon\Navigator::Long) {
            if ($degrees < 0)
                $compass = 'W';
            elseif ($degrees > 0)
                $compass = 'E';
        }
        $minutes = $coord - $degrees;
        if ($minutes < 0)
            $minutes -= (2 * $minutes);
        if ($degrees < 0)
            $degrees -= (2 * $degrees);

        $minutes = $minutes * 60;
        $seconds = $minutes - (integer) $minutes;
        $minutes = (integer) $minutes;
        $seconds = (float) $seconds * 60;

        $coordinate = sprintf($this->output_format, $degrees, $minutes, $seconds, $compass);
        return $coordinate;
    }

}