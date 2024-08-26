<?php

namespace App\Behavioral\Strategy\Structure;

class SubtractStrategy implements StrategyInterface
{
    public function execute(int $a, int $b): int
    {
        return $a - $b;
    }
}