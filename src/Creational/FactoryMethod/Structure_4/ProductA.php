<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_4;

class ProductA extends Product
{
    public function do(): void
    {
        echo 'Product A start doing';
    }
}
