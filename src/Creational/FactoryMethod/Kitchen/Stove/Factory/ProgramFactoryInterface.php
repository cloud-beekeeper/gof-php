<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Factory;

use Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Program\ProgramInterface;

interface ProgramFactoryInterface
{
    public function create(string $program): ProgramInterface;
}
