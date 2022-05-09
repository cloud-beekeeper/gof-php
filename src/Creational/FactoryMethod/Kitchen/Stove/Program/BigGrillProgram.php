<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Program;

final class BigGrillProgram implements ProgramInterface
{
    public const NAME = 'big_grill';

    public function run(): string
    {
        return self::NAME;
    }
}
