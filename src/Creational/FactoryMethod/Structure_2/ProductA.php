<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_2;

class ProductA implements ProductInterface
{
    public function do(): void
    {
        echo 'Product A start doing';
    }
}
