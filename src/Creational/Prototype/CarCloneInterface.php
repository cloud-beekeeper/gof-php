<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\Prototype;

interface CarCloneInterface
{
    public function clone(CarInterface $carOriginal, string $type): CarInterface;
}
