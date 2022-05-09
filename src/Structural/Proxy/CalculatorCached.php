<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Proxy;

use Edubovic\GofPhp\Structural\Facade\CalculatorFacade;
use Edubovic\GofPhp\Structural\Facade\CalculatorInterface;

final class CalculatorCached implements CalculatorInterface
{
    private const OPERATION_ADD = 'add';
    private const OPERATION_DIVIDE = 'divide';
    private const OPERATION_MULTIPLY = 'multiply';
    private const OPERATION_SUBTRACT = 'subtract';

    private CalculatorFacade $calculatorFacade;
    private array $results = [];

    public function __construct(CalculatorFacade $calculatorFacade)
    {
        $this->calculatorFacade = $calculatorFacade;
    }

    public function add(int $a, int $b): int
    {
        $key = $this->generateKey($a, $b, self::OPERATION_ADD);

        if (false === \array_key_exists($key, $this->results)) {
            $this->results[$key] = $this->calculatorFacade->add($a, $b);
        }

        return $this->results[$key];
    }

    public function divide(int $a, int $b): int
    {
        $key = $this->generateKey($a, $b, self::OPERATION_DIVIDE);

        if (false === \array_key_exists($key, $this->results)) {
            $this->results[$key] = $this->calculatorFacade->divide($a, $b);
        }

        return $this->results[$key];
    }

    public function multiply(int $a, int $b): int
    {
        $key = $this->generateKey($a, $b, self::OPERATION_MULTIPLY);

        if (false === \array_key_exists($key, $this->results)) {
            $this->results[$key] = $this->calculatorFacade->multiply($a, $b);
        }

        return $this->results[$key];
    }

    public function subtract(int $a, int $b): int
    {
        $key = $this->generateKey($a, $b, self::OPERATION_SUBTRACT);

        if (false === \array_key_exists($key, $this->results)) {
            $this->results[$key] = $this->calculatorFacade->subtract($a, $b);
        }

        return $this->results[$key];
    }

    private function generateKey(int $a, int $b, string $operation): string
    {
        return "{$a}{$operation}{$b}";
    }
}
