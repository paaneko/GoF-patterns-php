<?php

class TruckLogisticCreatorInterface implements LogisticCreatorInterface
{
    public function createLogistic(): LogisticInterface
    {
        return new Truck();
    }
}