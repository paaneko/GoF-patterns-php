<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Structure;

class ClientCode
{
    public function selectTransportSize(array $request): AbstractTransport
    {
        if ($request['cargo_weigh'] <= 1000) {
            $transportSize = new SmallTransport();
        } elseif ($request['cargo_weigh'] >= 1001 && $request['cargo_weigh'] <= 5000) {
            $transportSize = new BigTransport();
        } else {
            throw new \DomainException('Unsupported cargo weigh');
        }

        return $transportSize;
    }
}
