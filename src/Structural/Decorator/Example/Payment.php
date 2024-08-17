<?php

namespace App\Structural\Decorator\Example;

class Payment implements PaymentInterface
{
    private int $sum;

    public function __construct(int $sum)
    {
        $this->sum = $sum;
    }

    public function getSum(): int
    {
        return $this->sum;
    }
}