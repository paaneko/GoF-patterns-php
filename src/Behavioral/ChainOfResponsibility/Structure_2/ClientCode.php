<?php

namespace App\Behavioral\ChainOfResponsibility\Structure_2;

class ClientCode
{
    public function main(): void
    {
        $monkey = new MonkeyHandler();
        $squirrel = new SquirrelHandler();
        $dog = new DogHandler();

        $monkey->setNext($squirrel)->setNext($dog);

        $foods = ['banana', 'meat', 'leaf'];

        foreach ($foods as $food) {
            echo "Who wanna eat {$food}?.\n";
            $response = $monkey->handle($food);
            if ($response === null) {
                echo "Nobody can eat {$food}.\n";
            }
            echo $response . "\n";
        }
    }
}