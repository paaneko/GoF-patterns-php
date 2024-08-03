<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Example;

class TruckDelivery extends Delivery
{
    public function createTransport(): TransportInterface
    {
        return new Truck();
    }
}
