<?php

namespace App\Structural\Proxy\Structure;

class Repository implements RepositoryInterface
{
    public function find(string $id): string
    {
        return 'Repository results for ' . $id;
    }
}