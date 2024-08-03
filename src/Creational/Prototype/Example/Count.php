<?php

namespace App\Creational\Prototype\Example;

class Count
{
    private int $value = 0;

    public function increment(): self
    {
        $clone = clone $this;
        ++$clone->value;
        return $clone;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}