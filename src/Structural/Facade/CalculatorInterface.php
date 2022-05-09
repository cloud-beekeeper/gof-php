<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Facade;

interface CalculatorInterface
{
    public function add(int $a, int $b): int;

    public function divide(int $a, int $b): int;

    public function multiply(int $a, int $b): int;

    public function subtract(int $a, int $b): int;
}
