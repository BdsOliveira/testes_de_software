<?php

namespace App\Core;

readonly class Bhaskara
{
    private int $quantityOfSolutions;
    private Math $math;

    public function __construct(
        private float $a,
        private float $b,
        private float $c
    ) {
        $this->math = new Math();
        $this->quantityOfSolutions = $this->getQuantityOfSolutions();
    }

    public function isComplete(): bool
    {
        if ($this->b === floatval(0) || $this->c === floatval(0)) {
            return false;
        }
        return $this->a !== floatval(0) && $this->b !== floatval(0) && $this->c !== floatval(0) ? true : false;
    }

    public function getQuantityOfSolutions(): int
    {
        if ($this->calculateDelta() < 0) {
            return 0;
        }

        if ($this->calculateDelta() === 0) {
            return 1;
        }

        return 2;
    }

    public function calculateDelta(): float
    {
        $power = $this->math->power($this->b, 2);
        $product = $this->math->multiply($this->math->multiply(4, $this->a), $this->c);
        return $this->math->subtract($power, $product);
    }

    private function calculateX1(): float
    {
        return $this->calculateX('+');
    }

    private function calculateX2(): float
    {
        return $this->calculateX('-');
    }

    private function calculateX(string $signal): float
    {
        $root = $this->math->sqrt($this->calculateDelta());
        $dividend = 0;

        if ($signal === '+') {
            $dividend = $this->math->add(-$this->b, $root);
        }

        if ($signal === '-') {
            $dividend = $this->math->subtract(-$this->b, $root);
        }

        $divisor = $this->math->multiply(2, $this->a);
        return $this->math->divide($dividend, $divisor);
    }

    public function calculateSolutions(): array
    {
        if ($this->quantityOfSolutions === 0) {
            return [];
        }

        if ($this->calculateX1() === $this->calculateX2()) {
            return [$this->calculateX2()];
        }

        if ($this->quantityOfSolutions === 1) {
            return [$this->calculateX2()];
        }

        return [
            $this->calculateX1(),
            $this->calculateX2(),
        ];
    }
}
