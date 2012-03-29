<?php

use Treffynnon\Navigator\Distance\Converter as C;

class MetreToMileTest extends PHPUnit_Framework_TestCase {

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvert($distance) {
        $Mile = new C\MetreToMile;
        $this->assertRegExp('/[\d.]+/', (string) $Mile->convert($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedConvert() {
        $Mile = new C\MetreToMile;
        $Mile->convert();
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvertAccuracy($distance) {
        $Mile = new C\MetreToMile;
        $actual = $Mile->convert($distance);
        $expected = $distance * $Mile->factor;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testReverse($distance) {
        $Mile = new C\MetreToMile;
        $this->assertRegExp('/[\d.]+/', (string) $Mile->reverse($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedReverse() {
        $Mile = new C\MetreToMile;
        $Mile->reverse();
    }

    /**
     * @dataProvider distanceDataProvider
     */
    public function testReverseAccuracy($distance) {
        $Mile = new C\MetreToMile;
        $actual = $Mile->reverse($distance);
        $expected = $distance / $Mile->factor;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    public function distanceDataProvider() {
        return \NavigatorTestData::distanceData();
    }

}