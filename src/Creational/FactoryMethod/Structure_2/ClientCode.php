<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_2;

class ClientCode
{
    public function __construct(private ProductCreator $productCreator)
    {
    }

    public function main(): void
    {
        $config = $this->readApplicationConfigFile();

        $product = $this->productCreator->createProduct($config['product']);

        $product->do();
    }

    public function readApplicationConfigFile(): array
    {
        return [];
    }
}
