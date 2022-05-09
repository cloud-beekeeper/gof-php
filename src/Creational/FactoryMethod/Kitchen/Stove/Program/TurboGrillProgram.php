<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Program;

final class TurboGrillProgram implements ProgramInterface
{
    public const NAME = 'turbo_grill';

    public function run(): string
    {
        return self::NAME;
    }
}
