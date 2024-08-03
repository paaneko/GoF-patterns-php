<?php

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
}
