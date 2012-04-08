<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon\Navigator\Distance\Converter as C;

class MetreToNauticalMileTest extends PHPUnit_Framework_TestCase {

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvert($distance) {
        $NauticalMile = new C\MetreToNauticalMile;
        $this->assertRegExp('/[\d.]+/', (string) $NauticalMile->convert($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedConvert() {
        $NauticalMile = new C\MetreToNauticalMile;
        $NauticalMile->convert();
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvertAccuracy($distance) {
        $NauticalMile = new C\MetreToNauticalMile;
        $actual = $NauticalMile->convert($distance);
        $expected = $distance / $NauticalMile->factor;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testReverse($distance) {
        $NauticalMile = new C\MetreToNauticalMile;
        $this->assertRegExp('/[\d.]+/', (string) $NauticalMile->reverse($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedReverse() {
        $NauticalMile = new C\MetreToNauticalMile;
        $NauticalMile->reverse();
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testReverseAccuracy($distance) {
        $NauticalMile = new C\MetreToNauticalMile;
        $actual = $NauticalMile->reverse($distance);
        $expected = $distance * $NauticalMile->factor;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    public function distanceDataProvider() {
        return \NavigatorTestData::distanceData();
    }

}