<?php

namespace App\Structural\Decorator\Structure;

class ConcreteDecoratorA extends Decorator
{
    public function operation(): string
    {
        return "ConcreteDecoratorA +" . parent::operation();
    }
}