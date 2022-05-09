<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove;

use Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Factory\ProgramFactoryInterface;

final class Stove
{
    private ProgramFactoryInterface $programFactory;

    public function __construct(ProgramFactoryInterface $programFactory)
    {
        $this->programFactory = $programFactory;
    }

    public function bake(string $program): string
    {
        $program = $this->programFactory->create($program);

        return $program->run();
    }
}
