<?php

class Ship implements LogisticInterface
{
    public function deliver(): void
    {
        echo 'Start ship delivery';
    }
}