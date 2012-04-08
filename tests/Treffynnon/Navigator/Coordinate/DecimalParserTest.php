<?php

/**
 * Navigator: a geographic calculation library for PHP
 * @link http://navigator.simonholywell.com
 * @license http://www.opensource.org/licenses/bsd-license.php BSD 2-Clause License 
 * @copyright 2012, Simon Holywell
 * @author Simon Holywell <treffynnon@php.net>
 */
use Treffynnon\Navigator\Coordinate as C;

class DecimalParserTest extends PHPUnit_Framework_TestCase {

    public function testCorrectAbstractImplemented() {
        $DecimalParser = new C\DecimalParser;
        $this->assertInstanceOf('Treffynnon\Navigator\Coordinate\ParserAbstract', $DecimalParser);
    }

    /**
     * @dataProvider coordValidProvider
     */
    public function testSet($coord) {
        $DecimalParser = new C\DecimalParser;
        $this->assertEquals($DecimalParser->set($coord), (float) deg2rad($coord), '', 0.2);
    }

    /**
     * @dataProvider coordValidProvider
     */
    public function testGet($coord) {
        $coord_radians = deg2rad($coord);
        $DecimalParser = new C\DecimalParser;
        $this->assertEquals($DecimalParser->get($coord_radians), $coord, '', 0.2);
    }

    public function coordValidProvider() {
        return NavigatorTestData::coordData_decimal_valid();
    }

}
