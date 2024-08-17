<?php

namespace App\Structural\Decorator\Structure;

class ConcreteComponentInterface implements ComponentInterface
{
    public function operation(): string
    {
        return 'ConcreteComponent operation';
    }
}