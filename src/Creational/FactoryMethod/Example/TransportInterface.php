<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Example;

interface TransportInterface
{
    public function deliver(): string;
}
