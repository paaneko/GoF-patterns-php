<?php

class ClientCode
{
    public function __construct(private Logistic $logistic)
    {
    }

    public function startDelivery(string $method): void
    {
        $this->logistic->createTransport($method)->deliver();
    }
}