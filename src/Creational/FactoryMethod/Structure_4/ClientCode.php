<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_4;

class ClientCode
{
    public function __construct(private Product $product)
    {
    }

    public function main(): void
    {
        $config = $this->readApplicationConfigFile();

        $product = $this->product->createProduct($config['product']);

        $product->do();
    }

    public function readApplicationConfigFile(): array
    {
        return [];
    }
}
