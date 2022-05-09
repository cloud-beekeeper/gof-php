<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Composite;

final class Leaf implements ComponentInterface
{
    private int $index;

    public function __construct(int $index)
    {
        $this->index = $index;
    }

    public function increment(): void
    {
        $this->index++;
    }

    public function decrement(): void
    {
        $this->index--;
    }

    public function render(): string
    {
        return \str_repeat('-', $this->index) . "\n";
    }
}
