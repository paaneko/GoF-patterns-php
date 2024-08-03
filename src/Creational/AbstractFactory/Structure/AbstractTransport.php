<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Structure;

use App\Creational\AbstractFactory\Structure\Ship\ShipInterface;
use App\Creational\AbstractFactory\Structure\Truck\TruckInterface;

interface AbstractTransport
{
    public function createShip(): ShipInterface;

    public function createTruck(): TruckInterface;
}
