<?php

namespace App\Behavioral\ChainOfResponsibility\Structure_1;

abstract class Middleware
{
    private Middleware $next;

    public function linkWith(Middleware $next): void
    {
        $this->next = $next;
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->next) {
            return true;
        }

        return $this->next->check($email, $password);
    }
}