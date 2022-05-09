<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\Prototype;

interface CarInterface
{
    public function getType(): string;

    public function getColor(): string;

    public function setColor(string $color): void;

    public function getNumber(): string;

    public function setNumber(string $number): void;
}
