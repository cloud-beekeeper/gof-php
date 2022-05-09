<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\AbstractFactory\Kitchen\National;

final class UkraineNationalKitchen implements NationalKitchenInterface
{
    public function makeComplexLunch(): string
    {
        return 'Ukraine complex lunch';
    }
}
