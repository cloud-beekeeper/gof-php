<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Factory;

use Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Program\ProgramInterface;
use InvalidArgumentException;

final class ProgramFactory implements ProgramFactoryInterface
{
    private array $programs = [];

    public function addProgram(string $program, string $programClass): void
    {
        $this->programs[$program] = $programClass;
    }

    public function create(string $program): ProgramInterface
    {
        if (false === \array_key_exists($program, $this->programs)) {
            throw new InvalidArgumentException('Program not found.');
        }

        return new $this->programs[$program]();
    }
}
