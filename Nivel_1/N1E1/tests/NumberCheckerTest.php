<?php
use PHPUnit\Framework\TestCase;
use AsierWC\S107Testing\NumberChecker;


class NumberCheckerTest extends TestCase
{
    public function testEvenNumberReturnsTrue() {
        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isEven());
    }

    public function testOddNumberReturnsFalse() {
        $checker = new NumberChecker(5);
        $this->assertFalse($checker->isEven());
    }

    public function testPositiveNumberReturnsTrue() {
        $checker = new NumberChecker(3);
        $this->assertTrue($checker->isPositive());
    }

    public function testNegativeNumberReturnsFalse() {
        $checker = new NumberChecker(-1);
        $this->assertFalse($checker->isPositive());
    }
}
