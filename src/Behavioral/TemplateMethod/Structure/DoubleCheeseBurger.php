<?php

namespace App\Behavioral\TemplateMethod\Structure;

class DoubleCheeseBurger extends Burger
{
    public function laySecondPatty(): void
    {
        echo "Lay Second Patty";
    }

    public function laySalad(): void
    {
        echo "Lay Salad";
    }

    public function laySauce(): void
    {
        echo "Lay Garlic Sauce";
    }
}