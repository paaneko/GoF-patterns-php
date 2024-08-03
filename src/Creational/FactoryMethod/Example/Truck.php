<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Example;

class Truck implements TransportInterface
{
    public function deliver(): string
    {
        return 'Start truck delivery';
    }
}
