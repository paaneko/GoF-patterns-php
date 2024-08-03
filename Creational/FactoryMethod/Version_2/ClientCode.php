<?php

class ClientCode
{
    public function __construct(private LogisticCreator $logisticCreator )
    {
    }

    public function startDelivery(string $method): void
    {
        $this->logisticCreator->createLogistic($method)->deliver();
    }
}