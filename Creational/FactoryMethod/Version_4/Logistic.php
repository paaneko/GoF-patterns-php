<?php

abstract class Logistic
{
    abstract public function deliver(): void;

    public function createTransport(string $method): self
    {
        if ($method === 'sea') {
            return new Ship();
        }
        if ($method === 'ground') {
            return new Truck();
        }

        throw new DomainException('Provided logistic method not exists');
    }
}