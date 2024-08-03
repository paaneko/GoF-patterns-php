<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_4;

abstract class Product
{
    abstract public function do(): void;

    public function createProduct(string $productType): self
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
