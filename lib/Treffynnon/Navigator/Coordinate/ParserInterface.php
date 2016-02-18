<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */

namespace Treffynnon\Navigator\Coordinate;

use Treffynnon\Navigator as N;
use Treffynnon\Navigator\Exception as E;

/**
 * A base set of methods to set a direction (N,S,E,W) and validate
 * coordinates for classes that extend this abstract
 */
interface ParserInterface {

    /**
     * Initialise parser. Pass in either Treffynnon\Navigator::Long or Treffynnon\Navigator::Lat
     * @param string $direction
     */
    public function __construct($direction = null);

    /**
     * Get the direction string
     * @return string
     */
    public function getDirection();

    /**
     * Set the direction using Treffynnon\Navigator::Long or Treffynnon\Navigator::Lat
     * @param string $direction
     */
    public function setDirection($direction);

    /**
     * Wrapper function around the parse method to allow for coordinate 
     * validation
     * @param float|string $coord
     * @return float
     * @throws \Exception 
     */
    public function set($coord);

    public function parse($coord);

    public function get($coord);
}
