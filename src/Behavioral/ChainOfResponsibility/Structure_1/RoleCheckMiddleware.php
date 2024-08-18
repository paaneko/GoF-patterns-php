<?php

namespace App\Behavioral\ChainOfResponsibility\Structure_1;

class RoleCheckMiddleware extends Middleware
{
    private const string ADMIN_EMAIL = 'admin@gmail.com';

    public function check(string $email, string $password): bool
    {
        if ($email === self::ADMIN_EMAIL) {
            echo 'You are admin';
        }

        echo 'You are user';

        return parent::check($email,$password);
    }
}