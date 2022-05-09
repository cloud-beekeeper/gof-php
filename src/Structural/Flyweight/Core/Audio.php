<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Flyweight\Core;

final class Audio
{
    private string $audioFile;

    public function __construct(string $audioFile)
    {
        $this->audioFile = $audioFile;
    }

    public function play(): string
    {
        return $this->audioFile;
    }
}
