<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon\Navigator as N;
use Treffynnon\Navigator\Coordinate as C;

class CoordinateTestUnder7 extends PHPUnit_Framework_TestCase {

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testIncorrectParser() {
        $Coordinate = new N\Coordinate;
        $Coordinate->setParser(new stdClass());
    }

}
