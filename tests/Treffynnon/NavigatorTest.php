<?php
use Treffynnon as T;
class NavigatorTest extends PHPUnit_Framework_TestCase {
    public function testStaticAttributes() {
        $this->assertEquals('Lat', T\Navigator::Lat);
        $this->assertEquals('Long', T\Navigator::Long);
    }
}