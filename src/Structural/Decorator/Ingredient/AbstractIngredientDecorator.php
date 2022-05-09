<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Decorator\Ingredient;

use Edubovic\GofPhp\Structural\Decorator\PizzaInterface;

abstract class AbstractIngredientDecorator implements PizzaInterface
{
    private PizzaInterface $wrapper;

    public function __construct(PizzaInterface $wrapper)
    {
        $this->wrapper = $wrapper;
    }

    public function getWrapper(): PizzaInterface
    {
        return $this->wrapper;
    }
}
