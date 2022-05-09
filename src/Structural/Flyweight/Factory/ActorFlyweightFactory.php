<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Flyweight\Factory;

use Edubovic\GofPhp\Structural\Flyweight\Actor\TankActor;
use Edubovic\GofPhp\Structural\Flyweight\Actor\InfantrymanActor;
use Edubovic\GofPhp\Structural\Flyweight\ActorFlyweightInterface;
use Edubovic\GofPhp\Structural\Flyweight\Core\Audio;
use Edubovic\GofPhp\Structural\Flyweight\Core\Sprite;

final class ActorFlyweightFactory implements ActorFlyweightFactoryInterface
{
    private array $cache = [];
    private string $class;

    public function __construct(string $class)
    {
        $this->class = $class;
    }

    public function get(string $type): ActorFlyweightInterface
    {
        if (false === \array_key_exists($type, $this->cache)) {
            $this->cache[$type] = match ($type) {
                TankActor::TYPE => $this->createTankFlyweight(),
                InfantrymanActor::TYPE => $this->createInfantrymanFlyweight(),
            };
        }

        return $this->cache[$type];
    }

    public function getFlyweightActors(): array
    {
        return $this->cache;
    }

    private function createTankFlyweight(): ActorFlyweightInterface
    {
        return new $this->class(
            new Audio('play: ' . TankActor::TYPE),
            new Sprite('render: ' . TankActor::TYPE)
        );
    }

    private function createInfantrymanFlyweight(): ActorFlyweightInterface
    {
        return new $this->class(
            new Audio('play: ' . InfantrymanActor::TYPE),
            new Sprite('render: ' . InfantrymanActor::TYPE)
        );
    }
}
