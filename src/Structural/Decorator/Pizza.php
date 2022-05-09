<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Decorator;

final class Pizza implements PizzaInterface
{
    private array $ingredients = [];

    public function getIngredients(): array
    {
        return $this->ingredients;
    }
}
