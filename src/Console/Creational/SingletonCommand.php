<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Console\Creational;

use Edubovic\GofPhp\Console\AbstractBaseCommand;
use Edubovic\GofPhp\Creational\Singleton\Database;

final class SingletonCommand extends AbstractBaseCommand
{
    public const NAME = 'singleton';
    public const DESCRIPTION = '';
    public const ALIAS = 'c-s';

    public function execute(): void
    {
        $io = $this->app()->io();

        for ($i = 0; $i < 10; $i++) {
            Database::getInstance('mysql' . $i);
        }

        for ($i = 0; $i < 10; $i++) {
            $io->blackBgGreen(Database::getInstance('mysql' . $i)->getConnect(), true);
        }

        $io->blackBgRed('Count instances: ' . Database::countInstances(), true);

        $io->ok('Done', true);
    }
}
