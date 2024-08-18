<?php

namespace App\Behavioral\ChainOfResponsibility\Structure_2;

abstract class AbstractHandler implements HandlerInterface
{
    private HandlerInterface $nextHandler;

    public function setNext(HandlerInterface $handler): HandlerInterface
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    public function handle(string $request): ?string
    {
        if (!$this->nextHandler) {
            return null;
        }

        return $this->nextHandler->handle($request);
    }
}