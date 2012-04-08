<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon\Navigator\Distance\Converter as C;

class MetreToFurlongTest extends PHPUnit_Framework_TestCase {

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvert($distance) {
        $Furlong = new C\MetreToFurlong;
        $this->assertRegExp('/[\d.]+/', (string) $Furlong->convert($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedConvert() {
        $Furlong = new C\MetreToFurlong;
        $Furlong->convert();
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvertAccuracy($distance) {
        $Furlong = new C\MetreToFurlong;
        $actual = $Furlong->convert($distance);
        $expected = $distance * $Furlong->factor;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testReverse($distance) {
        $Furlong = new C\MetreToFurlong;
        $this->assertRegExp('/[\d.]+/', (string) $Furlong->reverse($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedReverse() {
        $Furlong = new C\MetreToFurlong;
        $Furlong->reverse();
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testReverseAccuracy($distance) {
        $Furlong = new C\MetreToFurlong;
        $actual = $Furlong->reverse($distance);
        $expected = $distance / $Furlong->factor;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    public function distanceDataProvider() {
        return \NavigatorTestData::distanceData();
    }

}