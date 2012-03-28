<?php

use Treffynnon\Navigator\Distance\Converter as C;

class KilometreTest extends PHPUnit_Framework_TestCase {

    /**
     * @dataProvider distanceDataProvider
     */
    public function testConvert($distance) {
        $Kilometre = new C\Kilometre;
        $this->assertRegExp('/[\d.]+/', (string) $Kilometre->convert($distance));
    }

    /**
     * @expectedException PHPUnit_Framework_Error 
     */
    public function testFailedConvert() {
        $Kilometre = new C\Kilometre;
        $Kilometre->convert();
    }

    /**
     * @dataProvider distanceDataProvider 
     */
    public function testAccuracy($distance) {
        $Kilometre = new C\Kilometre;
        $actual = $Kilometre->convert($distance);
        $expected = $distance / 1000;
        $this->assertEquals($expected, $actual, '', 0.2);
    }

    public function distanceDataProvider() {
        return \NavigatorTestData::distanceData();
    }

}