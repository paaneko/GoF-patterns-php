<?php

namespace Structural\Decorator\Example;

use App\Structural\Decorator\Example\ClientCode;
use PHPUnit\Framework\TestCase;

class ClientCodeTest extends TestCase
{
    public function testCanHandle(): void
    {
        $clientCode = new ClientCode();
        $result = $clientCode->main();

        $this->assertEquals(100 - 18, $result);
    }
}