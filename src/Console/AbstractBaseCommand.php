<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Console;

use Ahc\Cli\Application as App;
use Ahc\Cli\Input\Command;

abstract class AbstractBaseCommand extends Command
{
    public function __construct(string $name, string $desc = '', bool $allowUnknown = false, App $app = null)
    {
        parent::__construct($name, $desc, $allowUnknown, $app);

        $this->onConstruct();
    }

    protected function onConstruct(): void
    {
    }
}
