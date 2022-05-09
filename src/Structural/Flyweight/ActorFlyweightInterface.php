<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Flyweight;

use Edubovic\GofPhp\Structural\Flyweight\Core\Audio;
use Edubovic\GofPhp\Structural\Flyweight\Core\Sprite;

interface ActorFlyweightInterface
{
    public function getAudio(): Audio;
    public function getSprite(): Sprite;
}
