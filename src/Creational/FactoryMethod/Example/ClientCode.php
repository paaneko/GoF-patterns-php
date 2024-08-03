<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Example;

use DomainException;

class ClientCode
{
    private Delivery $delivery;

    public function main(array $request): string
    {
        $this->initialize($request['method']);

        return $this->delivery->deliver();
    }

    private function initialize(string $method): void
    {
        if ($method === 'sea') {
            $this->delivery = new ShipDelivery();
        } else if ($method === 'ground') {
            $this->delivery = new TruckDelivery();
        } else {
            throw new DomainException('Supported transport for provided method not exists');
        }
    }
}
