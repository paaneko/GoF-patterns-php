<?php

declare(strict_types=1);

namespace Creational\FactoryMethod\Example;

use App\Creational\FactoryMethod\Example\ClientCode;
use PHPUnit\Framework\TestCase;

class ClientCodeTest extends TestCase
{
    public function testCanHandleShipDelivery(): void
    {
        $clientCode = new ClientCode();
        $request = ["method" => "sea"];

        $response = $clientCode->main($request);

        $this->assertEquals('Start ship delivery', $response);
    }

    public function testCanHandleTruckDelivery(): void
    {
        $clientCode = new ClientCode();
        $request = ["method" => "ground"];

        $response = $clientCode->main($request);

        $this->assertEquals('Start truck delivery', $response);
    }

    public function testA(): void
    {
        $count = new Count();
        $orderItem = new OrderItem('Banana', $count);

        $orderItem->addOne();

        $this->assertEquals(1, $orderItem->getCount());

        $clonedItem = clone $orderItem;

        $this->assertEquals(1, $clonedItem->getCount());

        $orderItem->addOne();

        $this->assertEquals(1, $clonedItem->getCount());
    }
}

class OrderItem
{
    public function __construct(
        private string $name,
        private Count $count,
    ) {
    }

    public function addOne(): void
    {
        $this->count = $this->count->increment();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCount(): int
    {
        return $this->count->getValue();
    }
}

class Count
{
    private int $value = 0;

    public function increment(): self
    {
        $clone = clone $this;
        ++$clone->value;
        return $clone;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
