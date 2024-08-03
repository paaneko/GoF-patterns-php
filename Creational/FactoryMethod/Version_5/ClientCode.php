<?php

class ClientCode
{
    /** Injected by DI container, by reading container bindings and conf files */
    public function __construct(private LogisticInterface $logistic)
    {
    }

    public function startDelivery(): void
    {
        $this->logistic->deliver();
    }
}