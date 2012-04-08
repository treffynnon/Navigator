<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */

namespace Treffynnon\Navigator;

use Treffynnon\Navigator\Coordinate as C;

/**
 * To manage a coordinate in radians with the supplied parser object
 */
class Coordinate {

    /**
     * The radian value of the supplied coordinate
     * @var float
     */
    protected $coordinate = null;

    /**
     * Parser object to use when converting a value to radians and
     * back again
     * @var ParserInterface
     */
    protected $parser = null;

    /**
     * Setup a new coordinate
     * @param string|float $coord
     * @param ParserInterface $parser
     */
    public function __construct($coord = null, C\ParserAbstract $parser = null) {
        if (is_null($parser)) {
            $parser = $this->guessParser($coord);
        }

        $this->setParser($parser);

        if (!is_null($coord)) {
            $this->set($coord);
        }
    }

    /**
     * Guess the correct parser for a given coordinate
     * @param float|string $coord
     * @return \Treffynnon\Navigator\Coordinate\DecimalParser|\Treffynnon\Navigator\Coordinate\DmsParser 
     */
    public function guessParser($coord) {
        if (!is_numeric($coord) and !is_null($coord)) {
            return new C\DmsParser;
        }
        return new C\DecimalParser;
    }

    /**
     * Sets the coordinate using the parser to a radian value
     * @param float $coord
     */
    public function set($coord) {
        $this->coordinate = $this->getParser()->set($coord);
    }

    /**
     * Get a coordinates radian value
     * @return float
     */
    public function get() {
        return $this->coordinate;
    }

    /**
     * Used when a coordinate value is used as a string. This uses the parser
     * to output a human readable format converted from the radian value held in
     * $this->coordinate
     * @return string
     */
    public function __toString() {
        return (string) $this->getParser()->get($this->get());
    }

    /**
     * Set the parser that should be used to manage this coordinate
     * @param ParserInterface $parser
     */
    public function setParser(C\ParserAbstract $parser) {
        $this->parser = $parser;
    }

    /**
     * Get the parser that is currently in use for this coordinate
     * @return ParserInterface
     */
    public function &getParser() {
        return $this->parser;
    }

}