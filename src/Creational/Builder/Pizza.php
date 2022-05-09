<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\Builder;

final class Pizza implements PizzaInterface
{
    private bool $cheese = false;
    private bool $bacon = false;
    private bool $pineapples = false;
    private bool $mushrooms = false;
    private bool $seafood = false;

    public function isCheese(): bool
    {
        return $this->cheese;
    }

    public function setCheese(bool $cheese): self
    {
        $this->cheese = $cheese;
        return $this;
    }

    public function isBacon(): bool
    {
        return $this->bacon;
    }

    public function setBacon(bool $bacon): self
    {
        $this->bacon = $bacon;
        return $this;
    }

    public function isPineapples(): bool
    {
        return $this->pineapples;
    }

    public function setPineapples(bool $pineapples): self
    {
        $this->pineapples = $pineapples;
        return $this;
    }

    public function isMushrooms(): bool
    {
        return $this->mushrooms;
    }

    public function setMushrooms(bool $mushrooms): self
    {
        $this->mushrooms = $mushrooms;
        return $this;
    }

    public function isSeafood(): bool
    {
        return $this->seafood;
    }

    public function setSeafood(bool $seafood): self
    {
        $this->seafood = $seafood;
        return $this;
    }

    public static function builder(): PizzaBuilderInterface
    {
        return new PizzaBuilder(new self());
    }
}
