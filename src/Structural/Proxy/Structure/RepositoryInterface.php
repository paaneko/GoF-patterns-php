<?php

namespace App\Structural\Proxy\Structure;

interface RepositoryInterface
{
    public function find(string $id): string;
}