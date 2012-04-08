<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon\Navigator\Distance\Converter as C;

class ConverterAbstractTest extends PHPUnit_Framework_TestCase {

    public function testC() {
        $stub = $this->getMockForAbstractClass('Treffynnon\Navigator\Distance\Converter\ConverterAbstract');
        $stub->expects($this->any())
            ->method('convert')
            ->will($this->returnValue(true));
        $this->assertTrue($stub->c(10));
    }

    /**
     * @expectedException PHPUnit_Framework_Error 
     */
    public function testFailedC() {
        $stub = $this->getMockForAbstractClass('Treffynnon\Navigator\Distance\Converter\ConverterAbstract');
        $stub->expects($this->any())
            ->method('convert')
            ->will($this->returnValue(true));
        $this->assertTrue($stub->c());
    }

    public function testR() {
        $stub = $this->getMockForAbstractClass('Treffynnon\Navigator\Distance\Converter\ConverterAbstract');
        $stub->expects($this->any())
            ->method('reverse')
            ->will($this->returnValue(true));
        $this->assertTrue($stub->r(10));
    }

    /**
     * @expectedException PHPUnit_Framework_Error 
     */
    public function testFailedR() {
        $stub = $this->getMockForAbstractClass('Treffynnon\Navigator\Distance\Converter\ConverterAbstract');
        $stub->expects($this->any())
            ->method('reverse')
            ->will($this->returnValue(true));
        $this->assertTrue($stub->r());
    }

}