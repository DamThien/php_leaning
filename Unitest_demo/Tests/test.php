<?php
include("process.php");

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testArea()
    {
        $result = rectangleArea(7, 9);
        $this->assertEquals(63, $result);
    }
    public function testArea2()
    {
        $result2 = rectangleArea(7, 9);
        $this->assertEquals(62, $result2);
    }
}