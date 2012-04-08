<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon\Navigator as N;
use Treffynnon\Navigator\CelestialBody as CB;

class CalculatorAbstractTest extends PHPUnit_Framework_TestCase {

    public function testGetCelestialBody() {
        $stub = $this->getMockForAbstractClass('Treffynnon\Navigator\Distance\Calculator\CalculatorAbstract');
        $stub->expects($this->any())
            ->method('__construct')
            ->will($this->returnValue(true));
        $this->assertInstanceOf('Treffynnon\Navigator\CelestialBody\Earth', $stub->getCelestialBody());
    }

}
