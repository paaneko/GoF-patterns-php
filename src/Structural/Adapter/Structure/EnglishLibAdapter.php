<?php

namespace App\Structural\Adapter\Structure;

class EnglishLibAdapter implements EnglishLibAdapterInterface
{
    public function __construct(private GermanLib $germanLib)
    {
    }

    public function englishMethod(): void
    {
        $this->germanLib->germanMethod();
    }
}