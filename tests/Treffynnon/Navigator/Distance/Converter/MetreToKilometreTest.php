<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon\Navigator\Distance\Converter as C;

class MetreToKilometreTest extends PHPUnit_Framework_TestCase {

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvert($distance) {
        $Kilometre = new C\MetreToKilometre;
        $this->assertRegExp('/[\d.]+/', (string) $Kilometre->convert($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedConvert() {
        $Kilometre = new C\MetreToKilometre;
        $Kilometre->convert();
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvertAccuracy($distance) {
        $Kilometre = new C\MetreToKilometre;
        $actual = $Kilometre->convert($distance);
        $expected = $distance / $Kilometre->factor;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testReverse($distance) {
        $Kilometre = new C\MetreToKilometre;
        $this->assertRegExp('/[\d.]+/', (string) $Kilometre->reverse($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedReverse() {
        $Kilometre = new C\MetreToKilometre;
        $Kilometre->reverse();
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testReverseAccuracy($distance) {
        $Kilometre = new C\MetreToKilometre;
        $actual = $Kilometre->reverse($distance);
        $expected = $distance * $Kilometre->factor;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    public function distanceDataProvider() {
        return \NavigatorTestData::distanceData();
    }

}