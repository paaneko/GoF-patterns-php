<?php

namespace App\Behavioral\Strategy\Structure;

class ClientCode
{
    public function main(string $operation, int $a, int $b): int
    {
        $context = new Context();

        if ($operation === 'add') {
            $context->setStrategy(new AddStrategy());
        } elseif ($operation === 'multiply') {
            $context->setStrategy(new MultiplyStrategy());
        } elseif ($operation === 'subtract') {
            $context->setStrategy(new SubtractStrategy());
        }

        return $context->executeStrategy($a, $b);
    }
}