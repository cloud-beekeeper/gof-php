<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\AbstractFactory\Kitchen\National;

final class JapanNationalKitchen implements NationalKitchenInterface
{
    public function makeComplexLunch(): string
    {
        return 'Japan complex lunch';
    }
}
