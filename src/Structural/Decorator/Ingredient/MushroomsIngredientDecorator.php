<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Decorator\Ingredient;

final class MushroomsIngredientDecorator extends AbstractIngredientDecorator
{
    public const NAME = 'mushrooms';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getIngredients(): array
    {
        return \array_merge($this->getWrapper()->getIngredients(), [$this->getName()]);
    }
}
