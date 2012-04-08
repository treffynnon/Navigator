<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon\Navigator\Distance\Converter as C;

class MetreToLeagueTest extends PHPUnit_Framework_TestCase {

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvert($distance) {
        $League = new C\MetreToLeague;
        $this->assertRegExp('/[\d.]+/', (string) $League->convert($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedConvert() {
        $League = new C\MetreToLeague;
        $League->convert();
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvertAccuracy($distance) {
        $League = new C\MetreToLeague;
        $actual = $League->convert($distance);
        $expected = $distance * $League->factor;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testReverse($distance) {
        $League = new C\MetreToLeague;
        $this->assertRegExp('/[\d.]+/', (string) $League->reverse($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedReverse() {
        $League = new C\MetreToLeague;
        $League->reverse();
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testReverseAccuracy($distance) {
        $League = new C\MetreToLeague;
        $actual = $League->reverse($distance);
        $expected = $distance / $League->factor;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    public function distanceDataProvider() {
        return \NavigatorTestData::distanceData();
    }

}