<?php

namespace App\Behavioral\Strategy\Structure;

class AddStrategy implements StrategyInterface
{

    public function execute(int $a, int $b): int
    {
        return $a + $b;
    }
}