<?php

namespace App\Structural\Composite\Structure;

abstract class Element
{
    protected ?Element $parent;

    public function setParent(?Element $parent): void
    {
        $this->parent = $parent;
    }

    public function getParent(): ?Element
    {
        return $this->parent;
    }

    public function isNode(): bool
    {
        return false;
    }

    abstract public function doSomething(): void;
}