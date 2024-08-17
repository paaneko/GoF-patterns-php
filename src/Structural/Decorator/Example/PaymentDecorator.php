<?php

namespace App\Structural\Decorator\Example;

class PaymentDecorator implements PaymentInterface
{
    protected PaymentInterface $payment;

    public function __construct(PaymentInterface $payment)
    {
        $this->payment = $payment;
    }

    public function getSum(): int
    {
        return $this->payment->getSum();
    }
}