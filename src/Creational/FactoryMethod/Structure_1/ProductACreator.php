<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_1;

class ProductACreator extends ProductCreator
{
    public function createProduct(): ProductInterface
    {
        return new ProductA();
    }
}
