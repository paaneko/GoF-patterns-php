<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Example;

class ShipDelivery extends Delivery
{
    public function createTransport(): TransportInterface
    {
        return new Ship();
    }
}
