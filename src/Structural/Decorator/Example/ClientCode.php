<?php

namespace App\Structural\Decorator\Example;

class ClientCode
{
    public function main(): int
    {
        $config = $this->getConfig();
        $payment = new Payment(100);

        if ($config['transfer']['enabled'] === true) {
            $payment = new PaymentTransferCommission($payment);
        }
        if ($config['domain']['enabled'] === true) {
            $payment = new PaymentDomainCommission($payment);
        }
        if ($config['provider']['enabled'] === true) {
            $payment = new PaymentProviderCommission($payment);
        }

        return $payment->getSum();
    }

    private function getConfig(): array
    {
        return [
            'transfer' => [
                'enabled' => true
            ],
            'domain' => [
                'enabled' => true
            ],
            'provider' => [
                'enabled' => true
            ],
        ];
    }
}