<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_4;

class ProductB extends Product
{
    public function do(): void
    {
        echo 'Product B start doing';
    }
}
