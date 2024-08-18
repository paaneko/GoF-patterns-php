<?php

namespace App\Behavioral\ChainOfResponsibility\Structure_2;

class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'meat') {
            return 'Dog: I am eating meat.';
        }

        return parent::handle($request);
    }
}