<?php

namespace App\Structural\Adapter\Structure;

class ClientCode
{
    public function __construct(private EnglishLibAdapterInterface $englishLibAdapter)
    {
    }

    public function main()
    {
        $this->englishLibAdapter->englishMethod();
    }
}