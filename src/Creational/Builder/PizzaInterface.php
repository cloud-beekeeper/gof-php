<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\Builder;

interface PizzaInterface
{
    public function isCheese(): bool;

    public function setCheese(bool $cheese): self;

    public function isBacon(): bool;

    public function setBacon(bool $bacon): self;

    public function isPineapples(): bool;

    public function setPineapples(bool $pineapples): self;

    public function isMushrooms(): bool;

    public function setMushrooms(bool $mushrooms): self;

    public function isSeafood(): bool;

    public function setSeafood(bool $seafood): self;

    public static function builder(): PizzaBuilderInterface;
}
