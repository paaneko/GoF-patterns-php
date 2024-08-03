<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_3;

class ClientCode
{
    private ProductInterface $product;

    public function __construct(private ProductCreator $productCreator)
    {
    }

    public function main(): void
    {
        $config = $this->readApplicationConfigFile();

        if ($config['product'] === 'A') {
            $this->product = $this->productCreator->createProductA();
        } elseif ($config['product'] === 'B') {
            $this->product = $this->productCreator->createProductB();
        } else {
            throw new \DomainException();
        }

        $this->product->do();
    }

    public function readApplicationConfigFile(): array
    {
        return [];
    }
}
