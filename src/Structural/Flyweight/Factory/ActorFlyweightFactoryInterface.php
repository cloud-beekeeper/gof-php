<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Flyweight\Factory;

use Edubovic\GofPhp\Structural\Flyweight\ActorFlyweightInterface;

interface ActorFlyweightFactoryInterface
{
    public function get(string $type): ActorFlyweightInterface;
}
