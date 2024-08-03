<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_2;

use DomainException;

class ProductCreator
{
    public function createProduct(string $productType): ProductInterface
    {
        if ($productType === 'A') {
            return new ProductA();
        }

        if ($productType === 'B') {
            return new ProductB();
        }

        throw new \DomainException();
    }
}
