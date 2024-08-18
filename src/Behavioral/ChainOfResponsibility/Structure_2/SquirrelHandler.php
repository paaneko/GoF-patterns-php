<?php

namespace App\Behavioral\ChainOfResponsibility\Structure_2;

class SquirrelHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'nut') {
            return 'Squirrel: I am eating nut.';
        }

        return parent::handle($request);
    }
}