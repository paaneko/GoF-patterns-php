<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_1;

class ClientCode
{
    private ProductInterface $product;

    public function main(): void
    {
        $config = $this->readApplicationConfigFile();

        if ($config['product'] === 'A') {
            $this->product = (new ProductACreator())->createProduct();
        } elseif ($config['product'] === 'B') {
            $this->product = (new ProductBCreator())->createProduct();
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
