<?php

class LogisticCreator
{
    public function createLogistic(string $method): LogisticInterface
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