<?php

namespace App\Structural\Proxy\Structure;

class ClientCode
{
    public function main(): void
    {
        $repository = new Repository();
        $cachingRepository = new CachingRepository($repository);

        echo $cachingRepository->find('123');
    }
}