<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_3;

class ProductCreator
{
    public function createProductA(): ProductA
    {
        return new ProductA();
    }

    public function createProductB(): ProductB
    {
        return new ProductB();
    }
}
