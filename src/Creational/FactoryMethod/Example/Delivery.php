<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Example;

abstract class Delivery
{
    public function deliver(): string
    {
        return $this->createTransport()->deliver();
    }

    abstract public function createTransport(): TransportInterface;
}
