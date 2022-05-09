<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Flyweight;

use Edubovic\GofPhp\Structural\Flyweight\Core\Audio;
use Edubovic\GofPhp\Structural\Flyweight\Core\Sprite;

final class ActorFlyweight implements ActorFlyweightInterface
{
    private Audio $audio;
    private Sprite $sprite;

    public function __construct(Audio $audio, Sprite $sprite)
    {
        $this->audio = $audio;
        $this->sprite = $sprite;
    }

    public function getAudio(): Audio
    {
        return $this->audio;
    }

    public function getSprite(): Sprite
    {
        return $this->sprite;
    }
}
