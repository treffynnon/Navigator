<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon as T;
use Treffynnon\Navigator\Coordinate as C;

class ParserAbstractTest extends PHPUnit_Framework_TestCase {

    public function testGetDirection() {
        $stub = $this->getMockForAbstractClass('Treffynnon\Navigator\Coordinate\ParserAbstract');
        $stub->expects($this->any())
            ->method('get')
            ->will($this->returnValue(true));
        $this->assertInternalType('null', $stub->getDirection());
    }

    /**
     * @dataProvider directionInvalidProvider
     * @expectedException Treffynnon\Navigator\Exception\InvalidDirectionException
     */
    public function testSetInvalidDirection($direction) {
        $stub = $this->getMockForAbstractClass('Treffynnon\Navigator\Coordinate\ParserAbstract');
        $stub->expects($this->any())
            ->method('get')
            ->will($this->returnValue(true));
        $stub->setDirection($direction);
    }

    /**
     * @dataProvider directionValidProvider
     */
    public function testSetDirection($direction) {
        $stub = $this->getMockForAbstractClass('Treffynnon\Navigator\Coordinate\ParserAbstract');
        $stub->expects($this->any())
            ->method('get')
            ->will($this->returnValue(true));
        $stub->setDirection($direction);
        $this->assertEquals($stub->getDirection(), $direction);
    }

    /**
     * @dataProvider directionValidProvider
     */
    public function testConstructorSetDirection($direction) {
        $stub = $this->getMockForAbstractClass('Treffynnon\Navigator\Coordinate\ParserAbstract');
        $stub->expects($this->any())
            ->method('get')
            ->will($this->returnValue(true));
        $stub->__construct($direction);
        $this->assertEquals($stub->getDirection(), $direction);
    }

    public function directionValidProvider() {
        return NavigatorTestData::coordDirectionData_valid();
    }

    public function directionInvalidProvider() {
        return NavigatorTestData::coordDirectionData_invalid();
    }

}