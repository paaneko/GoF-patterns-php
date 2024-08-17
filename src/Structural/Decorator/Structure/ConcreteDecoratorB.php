<?php

namespace App\Structural\Decorator\Structure;

class ConcreteDecoratorB extends Decorator
{
    public function operation(): string
    {
        return "ConcreteDecoratorB +" . parent::operation();
    }
}