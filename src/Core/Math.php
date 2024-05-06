<?php

namespace App\Core;

class Math
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {
        if (floatval($b) === floatval(0)) {
            return 0;
        }
        return $a / $b;
    }

    public function power($a, $b)
    {
        return $a ** $b;
    }

    public function sqrt($a)
    {
        return sqrt($a);
    }
}
