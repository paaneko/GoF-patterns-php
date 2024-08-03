<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Structure_5;

class ClientCode
{
    /** Injected by DI container, by reading container bindings and conf files */
    public function __construct(private ProductInterface $product)
    {
    }

    public function main(): void
    {
        $this->product->do();
    }
}
