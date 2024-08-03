<?php

class Ship extends Logistic
{
    public function deliver(): void
    {
        echo 'Start ship delivery';
    }
}