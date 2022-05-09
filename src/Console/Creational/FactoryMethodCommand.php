<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Console\Creational;

use Edubovic\GofPhp\Console\AbstractBaseCommand;
use Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Factory\ProgramFactory;
use Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Program\BigGrillProgram;
use Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Program\SmallGrillProgram;
use Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Program\TurboGrillProgram;
use Edubovic\GofPhp\Creational\FactoryMethod\Kitchen\Stove\Stove;

final class FactoryMethodCommand extends AbstractBaseCommand
{
    public const NAME = 'factory-method';
    public const DESCRIPTION = '';
    public const ALIAS = 'c-fm';

    public function execute(): void
    {
        $io = $this->app()->io();

        $stove = new Stove($this->createProgramFactoryWithPrograms());

        $programs = [
            BigGrillProgram::NAME,
            SmallGrillProgram::NAME,
            TurboGrillProgram::NAME,
        ];

        foreach ($programs as $program) {
            $io->blackBgGreen("Cooking program started: {$stove->bake($program)}", true);
        }

        $io->ok('Done', true);
    }

    private function createProgramFactoryWithPrograms(): ProgramFactory
    {
        $programFactory = new ProgramFactory();
        $programFactory->addProgram(BigGrillProgram::NAME, BigGrillProgram::class);
        $programFactory->addProgram(SmallGrillProgram::NAME, SmallGrillProgram::class);
        $programFactory->addProgram(TurboGrillProgram::NAME, TurboGrillProgram::class);

        return $programFactory;
    }
}
