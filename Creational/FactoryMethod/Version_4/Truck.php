<?php

class Truck extends Logistic
{
    public function deliver(): void
    {
        echo 'Start truck delivery';
    }
}