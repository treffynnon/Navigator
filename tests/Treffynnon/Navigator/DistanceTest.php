<?php

use Treffynnon\Navigator as N;

class DistanceTest extends PHPUnit_Framework_TestCase {

	/**
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testFailedGet() {
		$point1 = new N\LatLong(new N\Coordinate(80.9), new N\Coordinate(20.1));
        $point2 = new N\LatLong(new N\Coordinate(20.1), new N\Coordinate(80.9));
        $Distance = new N\Distance($point1, $point2);
		$metres = $Distance->get(new stdClass, new stdClass);
	}

    public function testConstructor() {
        $point1 = new N\LatLong(new N\Coordinate(80.9), new N\Coordinate(20.1));
        $point2 = new N\LatLong(new N\Coordinate(20.1), new N\Coordinate(80.9));
        $Distance = new N\Distance($point1, $point2);
        $metres = $Distance->get();
        $this->assertEquals($metres, 7307755.5727136, '', 0.2);
    }

    /**
	 * @dataProvider coordValidProvider 
	 */
    public function testConstructorWithProvider($coord) {
        $point1 = new N\LatLong(new N\Coordinate($coord), new N\Coordinate($coord - 15));
        $point2 = new N\LatLong(new N\Coordinate($coord - 5), new N\Coordinate($coord));
        $Distance = new N\Distance($point1, $point2);
        $metres = $Distance->get();
        $this->assertGreaterThan(20, $metres);
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailedConstructor() {
        $Distance = new N\Distance(new stdClass, new stdClass);
    }

    public function coordValidProvider() {
        return NavigatorTestData::coordData_decimal_valid();
    }

}