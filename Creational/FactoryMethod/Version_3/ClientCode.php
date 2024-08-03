<?php

class ClientCode
{
    private LogisticInterface $logisticTransport;

    public function __construct(private LogisticCreator $logisticCreator)
    {
    }

    public function startDelivery(string $method): void
    {
        if ($method === 'sea') {
            $this->logisticTransport = $this->logisticCreator->createShip();
        } else if ($method === 'ground') {
            $this->logisticTransport = $this->logisticCreator->createTruck();
        } else {
            throw new DomainException('Provided logistic method not exists');
        }

        $this->logisticTransport->deliver();
    }
}