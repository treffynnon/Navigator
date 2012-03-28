<?php

use Treffynnon as T;
use Treffynnon\Navigator\Coordinate as C;

class BaseCoordinateParserTest extends PHPUnit_Framework_TestCase {

    public function testGetDirection() {
        $BaseCoordinateParser = new C\BaseCoordinateParser;
        $this->assertEquals($BaseCoordinateParser->getDirection(), null);
    }

    /**
     * @dataProvider directionInvalidProvider
     * @expectedException Treffynnon\InvalidDirectionException
     */
    public function testSetInvalidDirection($direction) {
        $BaseCoordinateParser = new C\BaseCoordinateParser;
        $BaseCoordinateParser->setDirection($direction);
    }

    /**
     * @dataProvider directionValidProvider
     */
    public function testSetDirection($direction) {
        $BaseCoordinateParser = new C\BaseCoordinateParser;
        $BaseCoordinateParser->setDirection($direction);
        $this->assertEquals($BaseCoordinateParser->getDirection(), $direction);
    }

    /**
     * @dataProvider directionValidProvider
     */
    public function testConstructorSetDirection($direction) {
        $BaseCoordinateParser = new C\BaseCoordinateParser($direction);
        $this->assertEquals($BaseCoordinateParser->getDirection(), $direction);
    }

    public function directionValidProvider() {
        return NavigatorTestData::coordDirectionData_valid();
    }

    public function directionInvalidProvider() {
        return NavigatorTestData::coordDirectionData_invalid();
    }

}