<?php

namespace Creational\Prototype\Example;

use App\Creational\Prototype\Example\Count;
use App\Creational\Prototype\Example\OrderItem;
use PHPUnit\Framework\TestCase;

class CloneTest extends TestCase
{
    public function testClone(): void
    {
        $count = new Count();
        $orderItem = new OrderItem('Order_1', $count);

        $orderItem->incrementCount();

        $this->assertEquals(1, $orderItem->getCount());

        $clonedItem = clone $orderItem;

        $this->assertEquals(1, $clonedItem->getCount());

        $orderItem->incrementCount();

        $this->assertEquals(1, $clonedItem->getCount());
    }
}