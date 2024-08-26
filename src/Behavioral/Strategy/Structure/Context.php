<?php

namespace App\Behavioral\Strategy\Structure;

class Context
{
    private StrategyInterface $strategy;

    public function setStrategy(StrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy(int $a, int $b): int
    {
        return $this->strategy->execute($a, $b);
    }
}