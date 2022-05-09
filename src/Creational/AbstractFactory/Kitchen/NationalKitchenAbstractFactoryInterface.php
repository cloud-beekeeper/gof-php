<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\AbstractFactory\Kitchen;

use  Edubovic\GofPhp\Creational\AbstractFactory\Kitchen\National\NationalKitchenInterface;

interface NationalKitchenAbstractFactoryInterface
{
    public function createKitchen(): NationalKitchenInterface;
}
