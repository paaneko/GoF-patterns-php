<?php

namespace App\Behavioral\TemplateMethod\Structure;

abstract class Burger
{
    public function make(): void
    {
        $this->layTopBread();
        $this->layTopCheese();
        $this->laySauce();
        $this->layOnions();
        $this->layFirstPatty();
        $this->laySecondPatty();
        $this->laySalad();
        $this->layBottomBread();
    }

    public function layTopBread(): void
    {
        echo "Laying top bread";
    }

    public function layTopCheese(): void
    {
        echo "Laying top cheese";
    }

    abstract public function laySauce(): void;

    public function layOnions(): void
    {
        echo "Laying onions";
    }

    public function layFirstPatty(): void
    {
        echo "Laying first patty";
    }

    abstract public function laySecondPatty(): void;

    abstract public function laySalad(): void;

    public function layBottomBread(): void
    {
        echo "Laying bottom bread";
    }
}