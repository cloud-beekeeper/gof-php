<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Console\Creational;

use Edubovic\GofPhp\Console\AbstractBaseCommand;
use Edubovic\GofPhp\Creational\AbstractFactory\Kitchen\AmericaNationalKitchenAbstractFactory;
use Edubovic\GofPhp\Creational\AbstractFactory\Kitchen\JapanNationalKitchenAbstractFactory;
use Edubovic\GofPhp\Creational\AbstractFactory\Kitchen\UkraineNationalKitchenAbstractFactory;

final class AbstractFactoryCommand extends AbstractBaseCommand
{
    public const NAME = 'abstract-factory';
    public const DESCRIPTION = '';
    public const ALIAS = 'c-af';

    public function execute(): void
    {
        $io = $this->app()->io();

        $nationals = [
            AmericaNationalKitchenAbstractFactory::class,
            JapanNationalKitchenAbstractFactory::class,
            UkraineNationalKitchenAbstractFactory::class,
        ];

        foreach ($nationals as $national) {
            $io->blackBgGreen((new $national())->createKitchen()->makeComplexLunch(), true);
        }

        $io->ok('Done', true);
    }
}
