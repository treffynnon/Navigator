<?php

use Treffynnon\Navigator as N;
use Treffynnon\Navigator\Distance\Calculator as C;
use Treffynnon\Navigator\CelestialBody as CB;

abstract class CelestialBodyTestAbstract extends PHPUnit_Framework_TestCase {

    public abstract function getObject();
    public abstract function vincentyDataProvider();
    public abstract function cosineLawDataProvider();
    public abstract function greatCircleDataProvider();
    public abstract function haversineDataProvider();
    
    public function testExtendsAbstract() {
        $CelestialBody = $this->getObject();
        $this->assertInstanceOf('Treffynnon\Navigator\CelestialBody\CelestialBodyAbstract', $CelestialBody);
    }

    public function testVolumetricMeanRadius() {
        $CelestialBody = $this->getObject();
        $this->assertClassHasAttribute('volumetricMeanRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->volumetricMeanRadius);
    }

    public function testPolarRadius() {
        $CelestialBody = $this->getObject();
        $this->assertClassHasAttribute('polarRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->polarRadius);
    }

    public function testEquatorialRadius() {
        $CelestialBody = $this->getObject();
        $this->assertClassHasAttribute('equatorialRadius', get_class($CelestialBody));
        $this->assertNotNull($CelestialBody->equatorialRadius);
    }
    
    /**
     * @dataProvider vincentyDataProvider 
     */
    public function testVincentyCalculate($lat1, $long1, $lat2, $long2, $expected_result) {
        $Vincenty = new C\Vincenty($this->getObject());
        $point1 = new N\LatLong(new N\Coordinate($lat1), new N\Coordinate($long1));
        $point2 = new N\LatLong(new N\Coordinate($lat2), new N\Coordinate($long2));
        $metres = $Vincenty->calculate($point1, $point2);
        $this->assertEquals($expected_result, $metres, '', 0.2);
    }

    /**
     * @dataProvider cosineLawDataProvider 
     */
    public function testCosineLawCalculate($lat1, $long1, $lat2, $long2, $expected_result) {
        $CosineLaw = new C\CosineLaw($this->getObject());
        $point1 = new N\LatLong(new N\Coordinate($lat1), new N\Coordinate($long1));
        $point2 = new N\LatLong(new N\Coordinate($lat2), new N\Coordinate($long2));
        $metres = $CosineLaw->calculate($point1, $point2);
        $this->assertEquals($expected_result, $metres, '', 0.2);
    }

    /**
     * @dataProvider haversineDataProvider 
     */
    public function testHaversineCalculate($lat1, $long1, $lat2, $long2, $expected_result) {
        $Haversine = new C\Haversine($this->getObject());
        $point1 = new N\LatLong(new N\Coordinate($lat1), new N\Coordinate($long1));
        $point2 = new N\LatLong(new N\Coordinate($lat2), new N\Coordinate($long2));
        $metres = $Haversine->calculate($point1, $point2);
        $this->assertEquals($expected_result, $metres, '', 0.2);
    }

    /**
     * @dataProvider greatCircleDataProvider 
     */
    public function testGreatCircleCalculate($lat1, $long1, $lat2, $long2, $expected_result) {
        $GreatCircle = new C\GreatCircle($this->getObject());
        $point1 = new N\LatLong(new N\Coordinate($lat1), new N\Coordinate($long1));
        $point2 = new N\LatLong(new N\Coordinate($lat2), new N\Coordinate($long2));
        $metres = $GreatCircle->calculate($point1, $point2);
        $this->assertEquals($expected_result, $metres, '', 0.2);
    }

    public function getCoordinates() {
        return array(
            array(80.9, 20.1, 20.1, 80.9),
            array(1, 2, 90, 60),
            array(90, 180, -180, -90),
            array(23, 12, -20, 90),
            array(-90, -13, 60, -34),
            array(1, 1, 1, 1),
            array(-2, -5, -19, 21),
        );
    }

    public function mergeCoordArrays($data, $results) {
        foreach($data as $key => $coords) {
            if(array_key_exists($key, $results)) {
                $results[$key] = array_merge($coords, $results[$key]);
            }
        }
        return $results;
    }
}