<?php

namespace App\Structural\Proxy\Structure;

class CachingRepository implements RepositoryInterface
{
    private array $cache = [];

    public function __construct(protected RepositoryInterface $repository)
    {
    }

    public function find(string $id): string
    {
        if (isset($this->cache[$id])) {
            return $this->cache[$id];
        }

        $result = $this->repository->find($id);
        $this->cache[$id] = $result;

        return $result;
    }
}