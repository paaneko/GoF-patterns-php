<?php

namespace App\Behavioral\Strategy\Structure;

class MultiplyStrategy implements StrategyInterface
{
    public function execute(int $a, int $b): int
    {
        return $a * $b;
    }
}