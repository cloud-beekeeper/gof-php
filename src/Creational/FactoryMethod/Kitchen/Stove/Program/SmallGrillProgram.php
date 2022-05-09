<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Program;

final class SmallGrillProgram implements ProgramInterface
{
    public const NAME = 'small_grill';

    public function run(): string
    {
        return self::NAME;
    }
}
