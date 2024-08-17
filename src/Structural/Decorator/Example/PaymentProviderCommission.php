<?php

namespace App\Structural\Decorator\Example;

class PaymentProviderCommission extends PaymentDecorator
{
    public function getSum(): int
    {
        return parent::getSum() - 10;
    }
}