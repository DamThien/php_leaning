<?php
function RectangleArea($width, $height)
{
    return $width * $height;
}
// Test hàm tính tổng bằng PHPUnit
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function TestArea()
    {
        $result = RectangleArea(7, 9);
        $this->assertEquals(63, $result);
    }
}
