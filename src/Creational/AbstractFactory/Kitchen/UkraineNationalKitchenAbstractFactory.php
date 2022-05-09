<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\AbstractFactory\Kitchen;

use  Edubovic\GofPhp\Creational\AbstractFactory\Kitchen\National\UkraineNationalKitchen;
use  Edubovic\GofPhp\Creational\AbstractFactory\Kitchen\National\NationalKitchenInterface;

final class UkraineNationalKitchenAbstractFactory implements NationalKitchenAbstractFactoryInterface
{
    public function createKitchen(): NationalKitchenInterface
    {
        return new UkraineNationalKitchen();
    }
}
