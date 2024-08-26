<?php

namespace App\Behavioral\TemplateMethod\Structure;

class CheeseBurger extends Burger
{
    public function laySauce(): void
    {
        echo "Lay Cheese sauce";
    }

    public function laySecondPatty(): void
    {
    }

    public function laySalad(): void
    {
    }
}