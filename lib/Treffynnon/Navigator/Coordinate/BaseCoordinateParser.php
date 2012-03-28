<?php

namespace Treffynnon\Navigator\Coordinate;

/**
 * @todo Convert this to be a trait when PHP 5.4 support improves
 */
class BaseCoordinateParser implements ParserInterface {

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
        if(!is_null($direction)) {
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
        if($direction === \Treffynnon\Navigator::Lat
                or $direction === \Treffynnon\Navigator::Long) {
            $this->direction = $direction;
        } else {
            throw new \Treffynnon\InvalidDirectionException('You can only supply Treffynnon\Navigator::Long or Treffynnon\Navigator::Lat');
        }
    }

    /**
     * Override this method
     * @param float $coord
     */
    public function get($coord) {
        // override this!
    }

    /**
     * Override this method
     * @param float $coord
     */
    public function set($coord) {
        // override this!
    }

}