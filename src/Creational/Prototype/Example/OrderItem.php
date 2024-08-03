<?php

namespace App\Creational\Prototype\Example;

class OrderItem
{
    public function __construct(
        private string $name,
        private Count $count,
    ) {
    }

    public function incrementCount(): void
    {
        $this->count = $this->count->increment();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCount(): int
    {
        return $this->count->getValue();
    }
}