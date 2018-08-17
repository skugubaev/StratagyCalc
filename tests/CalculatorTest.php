<?php

use PHPUnit\Framework\TestCase;
use \Skugubaev\Stratagy\Calculator;

final class CalculatorTest extends TestCase
{
    public function testPlusTwoNumbers() : void
    {
        $sum = new Calculator('+');
        $a = 25;
        $b = 75;
        $this->assertEquals(
            $a + $b,
            $sum->calc($a, $b)
        );
    }

    public function testSubsTwoNumbers() : void
    {
        $subs = new Calculator('-');
        $a = 75;
        $b = 25;
        $this->assertEquals(
            $a - $b,
            $subs->calc($a, $b)
        );
    }

    public function testMultTwoNumbers() : void
    {
        $mult = new Calculator('*');
        $a = 75;
        $b = 25;
        $this->assertEquals(
            $a * $b,
            $mult->calc($a, $b)
        );
    }

    public function testDivsTwoNumbersGood() : void
    {
        $divs = new Calculator('/');
        $a = 75;
        $b = 25;
        $this->assertEquals(
            $a / $b,
            $divs->calc($a, $b)
        );
    }

    public function testDivsTwoNumbersBad() : void
    {
        $divs = new Calculator('/');
        $a = 76;
        $b = 25;
        $this->assertEquals(
            $a / $b,
            $divs->calc($a, $b)
        );
    }

    public function testDivsByZero() : void
    {
        $divs = new Calculator('/');
        $this->expectException(\Exception::class);
        $a = 76;
        $b = 0;
        $divs->calc($a, $b);
    }
}