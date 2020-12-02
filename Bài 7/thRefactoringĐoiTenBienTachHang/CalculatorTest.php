<?php
require __DIR__ . "./Calculator.php";

class CalculatorTest extends TestCase
{
    public function testCalculateAdd()
    {
        $a = 1;
        $b = 1;
        $o = '+';

        $expected = 2;

        $calculator = new Calculator();
        $result = $calculator->calculate($a, $b, $o);
        $this->assertEquals($expected, $result);
    }
}