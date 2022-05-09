<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Console\Structural;

use Edubovic\GofPhp\Console\AbstractBaseCommand;
use Edubovic\GofPhp\Structural\Bridge\Kitchen\Dish\DessertDish;
use Edubovic\GofPhp\Structural\Bridge\Kitchen\Dish\FirstDish;
use Edubovic\GofPhp\Structural\Bridge\Kitchen\Dish\SecondDish;
use Edubovic\GofPhp\Structural\Bridge\Kitchen\Dish\ThirdDish;
use Edubovic\GofPhp\Structural\Bridge\Kitchen\National\AmericaNationalKitchen;
use Edubovic\GofPhp\Structural\Bridge\Kitchen\National\JapanNationalKitchen;
use Edubovic\GofPhp\Structural\Bridge\Kitchen\National\UkraineNationalKitchen;

final class BridgeCommand extends AbstractBaseCommand
{
    public const NAME = 'bridge';
    public const DESCRIPTION = '';
    public const ALIAS = 's-b';

    public function execute(): void
    {
        $io = $this->app()->io();

        $kitchens = [
            UkraineNationalKitchen::class => [
                DessertDish::class => 'Ukraine dessert',
                FirstDish::class => 'Ukraine first',
                SecondDish::class => 'Ukraine second',
                ThirdDish::class => 'Ukraine third',
            ],
            JapanNationalKitchen::class => [
                DessertDish::class => 'Japan dessert',
                FirstDish::class => 'Japan first',
                SecondDish::class => 'Japan second',
                ThirdDish::class => 'Japan third',
            ],
            AmericaNationalKitchen::class => [
                DessertDish::class => 'American dessert',
                FirstDish::class => 'American first',
                SecondDish::class => 'American second',
                ThirdDish::class => 'American third',
            ],
        ];

        foreach ($kitchens as $kitchen => $dishes) {
            foreach ($dishes as $dish => $nameDish) {
                $io->blackBgGreen((new $kitchen(new $dish($nameDish)))->cook(), true);
            }
        }

        $io->ok('Done', true);
    }
}
