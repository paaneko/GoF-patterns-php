<?php

namespace App\Structural\Composite\Structure;

class Leaf extends Element
{
    public function doSomething(): void
    {
        echo "do something";
    }
}