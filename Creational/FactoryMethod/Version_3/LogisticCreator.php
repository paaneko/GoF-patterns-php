<?php

class LogisticCreator
{
    public function createShip(): Ship
    {
        return new Ship();
    }

    public function createTruck(): Truck
    {
        return new Truck();
    }
}