<?php

namespace App\Behavioral\ChainOfResponsibility\Structure_2;

class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'banana') {
            return 'Monkey: I am eating banana.';
        }

        return parent::handle($request);
    }
}