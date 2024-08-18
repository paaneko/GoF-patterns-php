<?php

namespace App\Behavioral\ChainOfResponsibility\Structure_2;

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler): HandlerInterface;

    public function handle(string $request): ?string;
}