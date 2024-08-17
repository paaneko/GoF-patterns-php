<?php

namespace App\Structural\Decorator\Structure;

class ClientCode
{
    public function __construct(private ComponentInterface $component)
    {
    }

    public function main()
    {
        echo $this->component->operation();
    }
}