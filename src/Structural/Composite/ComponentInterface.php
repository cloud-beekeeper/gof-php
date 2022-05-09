<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Composite;

interface ComponentInterface
{
    public function increment(): void;
    public function decrement(): void;
    public function render(): string;
}
