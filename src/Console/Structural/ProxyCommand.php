<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Console\Structural;

use Edubovic\GofPhp\Console\AbstractBaseCommand;
use Edubovic\GofPhp\Structural\Facade\CalculatorFacade;
use Edubovic\GofPhp\Structural\Facade\HttpClient;
use Edubovic\GofPhp\Structural\Proxy\CalculatorCached;

final class ProxyCommand extends AbstractBaseCommand
{
    public const NAME = 'proxy';
    public const DESCRIPTION = '';
    public const ALIAS = 's-p';

    public function execute(): void
    {
        $io = $this->app()->io();

        $calculatorCached = new CalculatorCached(new CalculatorFacade(new HttpClient()));
        $io->blueBgGreen((string)$calculatorCached->add(4, 5), true);

        //$io->blueBgGreen((string)$calculatorCached->add(4, 5), true);

        $io->ok('Done', true);
    }
}
