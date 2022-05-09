<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Facade;

use Edubovic\GofPhp\Structural\Facade\Operation\AddOperation;
use Edubovic\GofPhp\Structural\Facade\Operation\DivideOperation;
use Edubovic\GofPhp\Structural\Facade\Operation\MultiplyOperation;
use Edubovic\GofPhp\Structural\Facade\Operation\SubtractOperation;
use Edubovic\GofPhp\Structural\Facade\Operation\OperationInterface;

final class CalculatorFacade implements CalculatorInterface
{
    private OperationInterface $addOperation;
    private OperationInterface $divideOperation;
    private OperationInterface $multiplyOperation;
    private OperationInterface $subtractOperation;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->addOperation = new AddOperation($httpClient);
        $this->divideOperation = new DivideOperation($httpClient);
        $this->multiplyOperation = new MultiplyOperation($httpClient);
        $this->subtractOperation = new SubtractOperation($httpClient);
    }

    public function add(int $a, int $b): int
    {
        return $this->addOperation->execute($a, $b);
    }

    public function divide(int $a, int $b): int
    {
        return $this->divideOperation->execute($a, $b);
    }

    public function multiply(int $a, int $b): int
    {
        return $this->multiplyOperation->execute($a, $b);
    }

    public function subtract(int $a, int $b): int
    {
        return $this->subtractOperation->execute($a, $b);
    }
}
