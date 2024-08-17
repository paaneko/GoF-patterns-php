<?php

namespace App\Structural\Decorator\Structure;

class Decorator implements ComponentInterface
{
    protected ComponentInterface $component;

    public function __construct(ComponentInterface $component)
    {
        $this->component = $component;
    }

    public function operation(): string
    {
        return $this->component->operation();
    }
}