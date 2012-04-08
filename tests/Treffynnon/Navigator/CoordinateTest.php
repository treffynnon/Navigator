<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon\Navigator as N;
use Treffynnon\Navigator\Coordinate as C;

class CoordinateTest extends PHPUnit_Framework_TestCase {

    public function testCorrectParser() {
        $Coordinate = new N\Coordinate;
        $Coordinate->setParser(new C\DecimalParser);
        $this->assertInstanceOf('Treffynnon\Navigator\Coordinate\DecimalParser', $Coordinate->getParser());
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testIncorrectParser() {
        $Coordinate = new N\Coordinate;
        $Coordinate->setParser(new stdClass());
    }

    public function testDefaultParser() {
        $Coordinate = new N\Coordinate;
        $this->assertInstanceOf('Treffynnon\Navigator\Coordinate\DecimalParser', $Coordinate->getParser());
    }

    /**
     * @dataProvider coordValidProvider
     */
    public function testSetCoordinate($coord) {
        $Coordinate = new N\Coordinate;
        $Coordinate->set($coord);
        $coord_out = (string) $Coordinate;
        $this->assertInternalType('string', $coord_out);
        $this->assertEquals($coord, $coord_out, '', 0.2);
    }

    /**
     * @dataProvider coordValidProvider
     */
    public function testGetCoordinate($coord) {
        $radians = deg2rad($coord);
        $Coordinate = new N\Coordinate;
        $Coordinate->set($coord);
        $this->assertEquals($radians, $Coordinate->get(), '', 0.00000000000002);
    }

    /**
     * @dataProvider coordValidProvider
     */
    public function testConstructorSetCoord($coord) {
        $Coordinate = new N\Coordinate($coord);
        $this->assertEquals($coord, (string) $Coordinate, '', 0.2);
    }

    /**
     * @dataProvider coordValidProvider
     */
    public function testConstructorSetParser($coord) {
        $parser = new C\DecimalParser();
        $Coordinate = new N\Coordinate($coord, $parser);
        $this->assertInstanceOf('Treffynnon\Navigator\Coordinate\DecimalParser', $Coordinate->getParser());
    }

    /**
     * @dataProvider coordInvalidLatProvider
     * @expectedException Treffynnon\Navigator\Exception\InvalidCoordinateValueException
     */
    public function testInvalidSetLatCoordinate($coord) {
        $Coordinate = new N\Coordinate;
        // must set a parser and direction
        $Coordinate->setParser(new C\DecimalParser(N::Lat));
        $Coordinate->set($coord);
        $coord_out = (string) $Coordinate;
        $this->assertInternalType('string', $coord_out);
        $this->assertEquals($coord, $coord_out, '', 0.2);
    }

    /**
     * @dataProvider coordInvalidLongProvider
     * @expectedException Treffynnon\Navigator\Exception\InvalidCoordinateValueException
     */
    public function testInvalidSetLongCoordinate($coord) {
        $Coordinate = new N\Coordinate;
        // must set a parser and direction
        $Coordinate->setParser(new C\DecimalParser(N::Long));
        $Coordinate->set($coord);
        $coord_out = (string) $Coordinate;
        $this->assertInternalType('string', $coord_out);
        $this->assertEquals($coord, $coord_out, '', 0.2);
    }

    public function testGuessParserWithDMS() {
        $Coordinate = new N\Coordinate();
        $return = $Coordinate->guessParser('10 10 10N');
        $this->assertInstanceOf('Treffynnon\\Navigator\\Coordinate\\DmsParser', $return);
    }

    public function coordValidProvider() {
        return NavigatorTestData::coordData_decimal_valid();
    }

    public function coordInvalidLatProvider() {
        return NavigatorTestData::coordData_decimal_lat_invalid();
    }

    public function coordInvalidLongProvider() {
        return NavigatorTestData::coordData_decimal_long_invalid();
    }

}