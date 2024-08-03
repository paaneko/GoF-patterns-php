<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Structure;

use App\Creational\AbstractFactory\Structure\Ship\BigShip;
use App\Creational\AbstractFactory\Structure\Ship\ShipInterface;
use App\Creational\AbstractFactory\Structure\Truck\SmallTruck;
use App\Creational\AbstractFactory\Structure\Truck\TruckInterface;

class BigTransport implements AbstractTransport
{
    public function createShip(): ShipInterface
    {
        return new BigShip();
    }

    public function createTruck(): TruckInterface
    {
        return new SmallTruck();
    }
}
