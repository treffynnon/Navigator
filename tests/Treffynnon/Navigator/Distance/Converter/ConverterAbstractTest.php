<?php

use Treffynnon\Navigator\Distance\Converter as C;

class ConverterAbstractTest extends PHPUnit_Framework_TestCase {

    public function testC() {
        $stub = $this->getMockForAbstractClass('Treffynnon\Navigator\Distance\Converter\ConverterAbstract');
        $stub->expects($this->any())
             ->method('convert')
             ->will($this->returnValue(true));
        $this->assertTrue($stub::c(10));
    }
}