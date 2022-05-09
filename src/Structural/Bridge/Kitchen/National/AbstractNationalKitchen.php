<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Bridge\Kitchen\National;

use Edubovic\GofPhp\Structural\Bridge\Kitchen\Dish\DishInterface;

abstract class AbstractNationalKitchen implements NationalKitchenInterface
{
    protected DishInterface $dish;

    public function __construct(DishInterface $dish)
    {
        $this->dish = $dish;
    }
}
