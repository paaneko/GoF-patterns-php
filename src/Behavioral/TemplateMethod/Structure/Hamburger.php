<?php

namespace App\Behavioral\TemplateMethod\Structure;

class Hamburger extends Burger
{
    public function laySauce(): void
    {
        echo "Lay Ketchup Sauce";
    }

    public function laySecondPatty(): void
    {
    }

    public function laySalad(): void
    {
        echo "Lay Salad";
    }
}