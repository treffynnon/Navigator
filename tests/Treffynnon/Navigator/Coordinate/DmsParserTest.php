<?php

use Treffynnon\Navigator as N;
use Treffynnon\Navigator\Coordinate as C;

class DmsParserTest extends PHPUnit_Framework_TestCase {

    public function testClassPropertiesExist() {
        $DmsParser = new C\DmsParser;
        $this->assertObjectHasAttribute('input_format', $DmsParser);
        $this->assertObjectHasAttribute('output_format', $DmsParser);
    }

    /**
     * @dataProvider coordValidProvider
     */
    public function testSet($coord) {
        $DmsParser = new C\DmsParser;
        $this->assertInternalType('float', $DmsParser->set($coord));
    }
    
    /**
     * @dataProvider coordInvalidProvider
     * @expectedException Treffynnon\InvalidCoordinateFormatException
     */
    public function testInvalidSet($coord) {
        $DmsParser = new C\DmsParser;
        $DmsParser->set($coord);
    }
    
    /**
     *@dataProvider coordValidProvider
     * @param type $coord 
     */
    public function testGet($coord) {
        $DmsParser = new C\DmsParser;
        $radian = $DmsParser->set($coord);
        $text = $DmsParser->get($radian);
        $this->assertInternalType('string', $text);
        $this->assertRegExp('/\d{1,2} \d{1,2} [\d.]+[N,S,E,W]?/', $text);
    }
    
    public function coordValidProvider() {
        return NavigatorTestData::coordData_dms_valid();
    }

    public function coordInvalidProvider() {
        return NavigatorTestData::coordData_dms_invalid();
    }

}