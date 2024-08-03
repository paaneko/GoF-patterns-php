<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Structure;

use App\Creational\AbstractFactory\Structure\Ship\ShipInterface;
use App\Creational\AbstractFactory\Structure\Ship\SmallShip;
use App\Creational\AbstractFactory\Structure\Truck\TruckInterface;

class SmallTransport implements AbstractTransport
{
    public function createShip(): ShipInterface
    {
        return new SmallShip();
    }

    public function createTruck(): TruckInterface
    {
        return new SmallShip();
    }
}
