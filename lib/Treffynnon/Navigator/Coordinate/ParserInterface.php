<?php
namespace Treffynnon\Navigator\Coordinate;
/**
 * The base coordinate parser interface.
 */
interface ParserInterface {
    public function __construct($direction);
    /**
     * When rendering from a radian value back to the specified format
     */
    public function get($coord);
    /**
     * Used when the coordinate is being set. This is where you parse your
     * coordinate format and return radians.
     */
    public function set($coord);
    /**
     * Pass in either Treffynnon\Navigator::Long or Treffynnon\Navigator::Lat
     * @example setDirection(Treffynnon\Navigator::Long);
     */
    public function setDirection($direction);
    /**
     * Should return the direction either as Treffynnon\Navigator::Long or Treffynnon\Navigator::Lat
     */
    public function getDirection();
}