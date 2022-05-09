<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\Prototype;

final class Car implements CarInterface, CarCloneInterface
{
    public const PASSENGER = 'passenger';
    public const TRUCK = 'truck';
    public const MINIVAN = 'minivan';

    private string $type;
    private string $color;
    private string $number;

    public function __construct(string $type, string $color, string $number)
    {
        $this->type = $type;
        $this->color = $color;
        $this->number = $number;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function clone(CarInterface $carOriginal, string $type): CarInterface
    {
        if (false === \in_array($type, [self::PASSENGER, self::MINIVAN, self::TRUCK])) {
            throw new \InvalidArgumentException("Argument \"type\" is not valid.");
        }

        $carClone = clone $carOriginal;
        $carClone->type = $type;

        return $carClone;
    }
}
