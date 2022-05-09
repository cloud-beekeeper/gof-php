<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Flyweight\Actor;

use Edubovic\GofPhp\Structural\Flyweight\ActorFlyweightInterface;

final class TankActor implements ActorInterface
{
    public const TYPE = 'tank';

    private ActorFlyweightInterface $actorFlyweight;

    public function __construct(ActorFlyweightInterface $actorFlyweight)
    {
        $this->actorFlyweight = $actorFlyweight;
    }

    public function play(): string
    {
        return $this->actorFlyweight->getAudio()->play();
    }

    public function render(): string
    {
        return $this->actorFlyweight->getSprite()->render();
    }

    public function move(): string
    {
        return $this->actorFlyweight->getSprite()->render();
    }
}
