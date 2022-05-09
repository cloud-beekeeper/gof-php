<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Bridge\Kitchen\Dish;

abstract class AbstractDish implements DishInterface
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
