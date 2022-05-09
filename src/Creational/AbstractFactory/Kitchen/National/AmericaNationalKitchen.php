<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\AbstractFactory\Kitchen\National;

final class AmericaNationalKitchen implements NationalKitchenInterface
{
    public function makeComplexLunch(): string
    {
        return 'American complex lunch';
    }
}
