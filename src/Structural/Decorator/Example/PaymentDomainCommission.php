<?php

namespace App\Structural\Decorator\Example;

class PaymentDomainCommission extends PaymentDecorator
{
    public function getSum(): int
    {
        return parent::getSum() - 5;
    }
}