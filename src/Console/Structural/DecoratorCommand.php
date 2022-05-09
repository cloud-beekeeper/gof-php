<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Console\Structural;

use Edubovic\GofPhp\Console\AbstractBaseCommand;
use Edubovic\GofPhp\Structural\Decorator\Ingredient\BaconIngredientDecorator;
use Edubovic\GofPhp\Structural\Decorator\Ingredient\CheeseIngredientDecorator;
use Edubovic\GofPhp\Structural\Decorator\Ingredient\MushroomsIngredientDecorator;
use Edubovic\GofPhp\Structural\Decorator\Ingredient\PineapplesIngredientDecorator;
use Edubovic\GofPhp\Structural\Decorator\Ingredient\SeafoodIngredientDecorator;
use Edubovic\GofPhp\Structural\Decorator\Pizza;

final class DecoratorCommand extends AbstractBaseCommand
{
    public const NAME = 'decorator';
    public const DESCRIPTION = '';
    public const ALIAS = 's-d';

    public function execute(): void
    {
        $io = $this->app()->io();

        $ingredients = [
            BaconIngredientDecorator::class,
            CheeseIngredientDecorator::class,
            MushroomsIngredientDecorator::class,
            PineapplesIngredientDecorator::class,
            SeafoodIngredientDecorator::class,
        ];

        $pizza = new Pizza();

        foreach ($ingredients as $ingredient) {
            $pizza = new $ingredient($pizza);
        }

        $io->blackBgGreen(\implode('-', $pizza->getIngredients()), true);

        $io->ok('Done', true);
    }
}
