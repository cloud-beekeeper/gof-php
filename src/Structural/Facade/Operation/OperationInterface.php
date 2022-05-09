<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Facade\Operation;

interface OperationInterface
{
    public function execute(int $a, int $b): int;
}
