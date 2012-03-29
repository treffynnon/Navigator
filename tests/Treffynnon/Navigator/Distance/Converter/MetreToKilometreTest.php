<?php

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
    public function testAccuracy($distance) {
        $Kilometre = new C\MetreToKilometre;
        $actual = $Kilometre->convert($distance);
        $expected = $distance / 1000;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    public function distanceDataProvider() {
        return \NavigatorTestData::distanceData();
    }

}