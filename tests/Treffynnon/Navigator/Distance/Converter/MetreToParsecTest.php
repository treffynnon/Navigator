<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon\Navigator\Distance\Converter as C;

class MetreToParsecTest extends PHPUnit_Framework_TestCase {

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvert($distance) {
        $Parsec = new C\MetreToParsec;
        $this->assertRegExp('/[\d.]+/', (string) $Parsec->convert($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedConvert() {
        $Parsec = new C\MetreToParsec;
        $Parsec->convert();
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvertAccuracy($distance) {
        $Parsec = new C\MetreToParsec;
        $actual = $Parsec->convert($distance);
        $expected = $distance * $Parsec->factor;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testReverse($distance) {
        $Parsec = new C\MetreToParsec;
        $this->assertRegExp('/[\d.]+/', (string) $Parsec->reverse($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedReverse() {
        $Parsec = new C\MetreToParsec;
        $Parsec->reverse();
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testReverseAccuracy($distance) {
        $Parsec = new C\MetreToParsec;
        $actual = $Parsec->reverse($distance);
        $expected = $distance / $Parsec->factor;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    public function distanceDataProvider() {
        return \NavigatorTestData::distanceData();
    }

}