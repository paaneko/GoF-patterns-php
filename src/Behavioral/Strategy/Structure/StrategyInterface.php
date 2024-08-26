<?php

namespace App\Behavioral\Strategy\Structure;

interface StrategyInterface
{
    public function execute(int $a, int $b): int;
}