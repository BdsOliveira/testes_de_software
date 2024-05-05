<?php

namespace Tests\Feature;

use App\Core\Bhaskara;
use Tests\BaseTestCase;

class BhaskaraTest extends BaseTestCase
{
    public function testEsquacaoIsNotComplete(): void
    {
        $bhaskara = new Bhaskara(0, 0, 0);
        $this->assertEquals(false, $bhaskara->isComplete());

        $bhaskara = new Bhaskara(0, 5, 3);
        $this->assertEquals(false, $bhaskara->isComplete());

        $bhaskara = new Bhaskara(8, 0, 3);
        $this->assertEquals(false, $bhaskara->isComplete());
    }

    public function testEsquacaoIsComplete(): void
    {
        $bhaskara = new Bhaskara(1, 5, 3);
        $this->assertEquals(true, $bhaskara->isComplete());

        $bhaskara = new Bhaskara(1, 3, -4);
        $this->assertEquals(true, $bhaskara->isComplete());
    }

    public function testQuantityOfSolutions(): void
    {
        $bhaskara = new Bhaskara(1, 5, 3);
        $this->assertEquals(2, $bhaskara->getQuantityOfSolutions());

        $bhaskara = new Bhaskara(4, 6, 2);
        $this->assertEquals(2, $bhaskara->getQuantityOfSolutions());

        $bhaskara = new Bhaskara(8, 0, 3);
        $this->assertEquals(0, $bhaskara->getQuantityOfSolutions());

        $bhaskara = new Bhaskara(4, 3, 0);
        $this->assertEquals(2, $bhaskara->getQuantityOfSolutions());
    }

    public function testDeltaCalculationIsCorrect(): void
    {
        $bhaskara = new Bhaskara(1, 5, 3);
        $this->assertEquals(13, $bhaskara->calculateDelta());

        $bhaskara = new Bhaskara(4, 6, 2);
        $this->assertEquals(4, $bhaskara->calculateDelta());

        $bhaskara = new Bhaskara(1, 3, -4);
        $this->assertEquals(25, $bhaskara->calculateDelta());

        $bhaskara = new Bhaskara(2, 3, 2);
        $this->assertEquals(-7, $bhaskara->calculateDelta());
    }

    public function testSolutionsCalculationIsCorrect(): void
    {
        $bhaskara = new Bhaskara(1, 3, -4);
        $this->assertEquals([1, -4], $bhaskara->calculateSolutions());

        $bhaskara = new Bhaskara(2, 3, 2);
        $this->assertEquals([], $bhaskara->calculateSolutions());

        $bhaskara = new Bhaskara(1, 2, 1);
        $this->assertEquals([-1], $bhaskara->calculateSolutions());
    }
}
