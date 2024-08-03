<?php

class Truck implements LogisticInterface
{
    public function deliver(): void
    {
        echo 'Start truck delivery';
    }
}