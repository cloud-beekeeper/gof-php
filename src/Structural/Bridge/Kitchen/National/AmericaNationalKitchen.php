<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Bridge\Kitchen\National;

final class AmericaNationalKitchen extends AbstractNationalKitchen
{
    public function cook(): string
    {
        return $this->dish->getName();
    }
}
