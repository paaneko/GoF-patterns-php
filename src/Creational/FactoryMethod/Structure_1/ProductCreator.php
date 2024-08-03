<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_1;

abstract class ProductCreator
{
    public function doSomething(): void
    {
        echo "Doing something...";
    }

    abstract public function createProduct(): ProductInterface;
}
