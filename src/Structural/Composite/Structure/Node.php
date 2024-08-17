<?php

namespace App\Structural\Composite\Structure;

class Node extends Element
{
    protected \SplObjectStorage $children;

    public function __construct()
    {
        $this->children = new \SplObjectStorage();
    }

    public function add(Element $element): void
    {
        $this->children->attach($element);
        $element->setParent($this);
    }

    public function remove(Element $element): void
    {
        $this->children->detach($element);
        $element->setParent(null);
    }

    public function isNode(): bool
    {
        return true;
    }

    public function doSomething(): void
    {
        foreach ($this->children as $child) {
            $child->doSomething();
        }
    }
}