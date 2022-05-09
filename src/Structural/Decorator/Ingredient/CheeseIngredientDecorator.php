<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Decorator\Ingredient;

final class CheeseIngredientDecorator extends AbstractIngredientDecorator
{
    public const NAME = 'cheese';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getIngredients(): array
    {
        return \array_merge($this->getWrapper()->getIngredients(), [$this->getName()]);
    }
}
