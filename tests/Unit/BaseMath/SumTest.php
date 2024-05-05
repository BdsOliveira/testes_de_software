<?php

namespace Tests\Unit\BaseMath;

use App\Core\Math;
use Tests\BaseTestCase;

class SumTest extends BaseTestCase
{
    private Math $math;
    public function setUp(): void
    {
        $this->math = new Math();
    }
    public function testSumReturnsCorrectValue()
    {
        $this->assertEquals(5, $this->math->add(3, 2));
        $this->assertEquals(-1, $this->math->add(-3, 2));
        $this->assertNotEquals(5, $this->math->add(3, -2));
    }
    public function testSubtractReturnsCorrectValue()
    {
        $this->assertEquals(1, $this->math->subtract(3, 2));
        $this->assertEquals(5, $this->math->subtract(3, -2));
        $this->assertNotEquals(5, $this->math->subtract(3, 3));
    }

    public function testMultiplyReturnsCorrectValue()
    {
        $this->assertEquals(6, $this->math->multiply(2, 3));
        $this->assertEquals(-6, $this->math->multiply(3, -2));
        $this->assertEquals(0, $this->math->multiply(0, -2));
        $this->assertNotEquals(6, $this->math->multiply(2, 2));
    }

    public function testDivideReturnsCorrectValue()
    {
        $this->assertEquals(2, $this->math->divide(6, 3));
        $this->assertEquals(-2, $this->math->divide(6, -3));
        $this->assertEquals(0, $this->math->divide(6, 0));
        $this->assertNotEquals(2, $this->math->divide(6, 2));
    }

    public function testPowerReturnsCorrectValue()
    {
        $this->assertEquals(8, $this->math->power(2, 3));
        $this->assertEquals(1, $this->math->power(2, 0));
        $this->assertEquals(2, $this->math->power(2, 1));
        $this->assertNotEquals(8, $this->math->power(2, 2));
    }

    public function testSquareRootReturnsCorrectValue()
    {
        $this->assertEquals(2, $this->math->sqrt(4));
        $this->assertEquals(0, $this->math->sqrt(0));
        $this->assertEquals(1, $this->math->sqrt(1));
        $this->assertNotEquals(2, $this->math->sqrt(2));
    }
}