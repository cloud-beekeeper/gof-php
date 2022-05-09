<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Console\Structural;

use Edubovic\GofPhp\Console\AbstractBaseCommand;
use Edubovic\GofPhp\Structural\Facade\CalculatorFacade;
use Edubovic\GofPhp\Structural\Facade\HttpClient;

final class FacadeCommand extends AbstractBaseCommand
{
    public const NAME = 'facade';
    public const DESCRIPTION = '';
    public const ALIAS = 'f';

    public function execute(): void
    {
        $calculator = new CalculatorFacade(new HttpClient());

        echo $calculator->add(4, 5);

        echo "\n";
    }
}
