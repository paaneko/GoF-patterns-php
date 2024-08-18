<?php

namespace App\Behavioral\ChainOfResponsibility\Structure_1;

class UserExistsMiddleware extends Middleware
{
    public function __construct(private Server $server)
    {
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->server->hasEmail($email)) {
            echo 'User does not exist';
            return false;
        }

        if (!$this->server->isValidPassword($email, $password)) {
            echo 'Invalid credentials';
            return false;
        }

        return parent::check($email, $password);
    }
}