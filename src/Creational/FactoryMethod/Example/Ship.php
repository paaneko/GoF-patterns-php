<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Example;

class Ship implements TransportInterface
{
    public function deliver(): string
    {
        return 'Start ship delivery';
    }
}
