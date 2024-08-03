<?php

class ClientCode
{
    private LogisticInterface $logistic;

    /** Injected by DI container, by reading container bindings and conf files */
    public function __construct(LogisticCreatorInterface $logisticCreator)
    {
        $this->logistic = $logisticCreator->createLogistic();
    }

    public function startDelivery(): void
    {
        $this->logistic->deliver();
    }
}