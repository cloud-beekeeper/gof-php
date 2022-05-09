<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Console\Structural;

use Edubovic\GofPhp\Console\AbstractBaseCommand;
use Edubovic\GofPhp\Structural\Flyweight\Actor\ActorInterface;
use Edubovic\GofPhp\Structural\Flyweight\Actor\InfantrymanActor;
use Edubovic\GofPhp\Structural\Flyweight\Actor\TankActor;
use Edubovic\GofPhp\Structural\Flyweight\ActorFlyweight;
use Edubovic\GofPhp\Structural\Flyweight\Factory\ActorFlyweightFactory;

final class FlyweightCommand extends AbstractBaseCommand
{
    public const NAME = 'flyweight';
    public const DESCRIPTION = '';
    public const ALIAS = 's-f';

    public function execute(): void
    {
        $io = $this->app()->io();

        /** @var ActorInterface[] $actors */
        $actors = [];

        $actorFlyweightFactory = new ActorFlyweightFactory(ActorFlyweight::class);

        for ($i = 0; $i < 1000; $i++) {
            $actors[] = new TankActor($actorFlyweightFactory->get(TankActor::TYPE));
            $actors[] = new InfantrymanActor($actorFlyweightFactory->get(InfantrymanActor::TYPE));
        }

        foreach ($actors as $actor) {
            $io->blueBgGreen($actor->play(), true);
            $io->blueBgGreen($actor->render(), true);
        }

        $io->blueBgWhite('Count flyweight actors: ' . \count($actorFlyweightFactory->getFlyweightActors()), true);

        $io->ok('Done', true);
    }
}
