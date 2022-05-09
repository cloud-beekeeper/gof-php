<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Flyweight\Core;

final class Sprite
{
    private string $spriteFile;

    public function __construct(string $spriteFile)
    {
        $this->spriteFile = $spriteFile;
    }

    public function render(): string
    {
        return $this->spriteFile;
    }
}
