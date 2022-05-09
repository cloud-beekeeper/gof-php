<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Console\Creational;

use Edubovic\GofPhp\Console\AbstractBaseCommand;
use Edubovic\GofPhp\Creational\Prototype\Car;

final class PrototypeCommand extends AbstractBaseCommand
{
    public const NAME = 'prototype';
    public const DESCRIPTION = '';
    public const ALIAS = 'c-p';

    public function execute(): void
    {
        $io = $this->app()->io();

        $carTruck = new Car(Car::TRUCK, 'red', '100');

        $carMinivan = $carTruck->clone($carTruck, Car::MINIVAN);
        $carMinivan->setColor('green');
        $carMinivan->setNumber('200');

        $carPassenger = $carTruck->clone($carTruck, Car::PASSENGER);
        $carPassenger->setColor('blue');
        $carPassenger->setNumber('300');

        $io->blackBgGreen(
            "Car: {$carTruck->getType()}/{$carTruck->getColor()}/{$carTruck->getNumber()}",
            true
        );
        $io->blackBgGreen(
            "Car: {$carMinivan->getType()}/{$carMinivan->getColor()}/{$carMinivan->getNumber()}",
            true
        );
        $io->blackBgGreen(
            "Car: {$carPassenger->getType()}/{$carPassenger->getColor()}/{$carPassenger->getNumber()}",
            true
        );

        $io->ok('Done', true);
    }
}
