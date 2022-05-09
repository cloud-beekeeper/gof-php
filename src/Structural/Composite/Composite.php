<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Composite;

use SplObjectStorage;

final class Composite implements ComponentInterface
{
    private SplObjectStorage $components;

    public function __construct()
    {
        $this->components = new SplObjectStorage();
    }

    public function addComponent(ComponentInterface $component): void
    {
        if (false === $this->components->contains($component)) {
            $this->components->attach($component);
        }
    }

    public function removeComponent(ComponentInterface $component): void
    {
        if ($this->components->contains($component)) {
            $this->components->detach($component);
        }
    }

    public function increment(): void
    {
        foreach ($this->components as $child) {
            $child->increment();
        }
    }

    public function decrement(): void
    {
        foreach ($this->components as $child) {
            $child->decrement();
        }
    }

    public function render(): string
    {
        $str = '';

        foreach ($this->components as $child) {
            $str .= $child->render();
        }

        return $str;
    }
}
