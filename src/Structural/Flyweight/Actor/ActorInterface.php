<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Flyweight\Actor;

interface ActorInterface
{
    public function play(): string;
    public function render(): string;
    public function move(): string;
}
