<?php

namespace Treffynnon\Navigator\Coordinate;

/**
 * @todo Convert this to be a trait when PHP 5.4 support improves
 */
abstract class ParserAbstract {

    /**
     * The direction stored as either Treffynnon\Navigator::Long or Treffynnon\Navigator::Lat
     * @var string
     */
    protected $direction = null;

    /**
     * Initialise parser. Pass in either Treffynnon\Navigator::Long or Treffynnon\Navigator::Lat
     * @param string $direction
     */
    public function __construct($direction = null) {
        if (!is_null($direction)) {
            $this->setDirection($direction);
        }
    }

    /**
     * Get the direction string
     * @return string
     */
    public function getDirection() {
        return $this->direction;
    }

    /**
     * Set the direction using Treffynnon\Navigator::Long or Treffynnon\Navigator::Lat
     * @param string $direction
     */
    public function setDirection($direction) {
        if ($direction === \Treffynnon\Navigator::Lat
            or $direction === \Treffynnon\Navigator::Long) {
            $this->direction = $direction;
        } else {
            throw new \Treffynnon\InvalidDirectionException('You can only supply Treffynnon\Navigator::Long or Treffynnon\Navigator::Lat');
        }
    }

    /**
     * Wrapper function around the parse method to allow for coordinate 
     * validation
     * @param float|string $coord
     * @return float
     * @throws \Exception 
     */
    public function set($coord) {
        $radians = $this->parse($coord);
        if ($this->getDirection() == \Treffynnon\Navigator::Lat
            and ($radians < -1.5707963267949 or $radians > 1.5707963267949)) {
            throw new InvalidCoordinateValueException('Latitude may not be greater than 90 or lower than -90');
        } elseif ($this->getDirection() == \Treffynnon\Navigator::Long
            and ($radians < -3.1415926535898 or $radians > 3.1415926535898)) {
            throw new InvalidCoordinateValueException('Longitude may not be greater than 180 or lower than -180');
        }
        return $radians;
    }

    abstract public function parse($coord);

    abstract public function get($coord);
}

class InvalidCoordinateValueException extends \Exception {
    
}