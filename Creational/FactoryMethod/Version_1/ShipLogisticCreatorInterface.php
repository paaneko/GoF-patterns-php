<?php

class ShipLogisticCreatorInterface implements LogisticCreatorInterface
{
    public function createLogistic(): LogisticInterface
    {
        return new Ship();
    }
}