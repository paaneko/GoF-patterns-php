<?php

namespace App\Structural\Decorator\Example;

class PaymentTransferCommission extends PaymentDecorator
{
    public function getSum(): int
    {
        return parent::getSum() - 3;
    }
}
