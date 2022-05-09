<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\Builder;

final class PizzaBuilder implements PizzaBuilderInterface
{
    private Pizza $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function useCheese(): self
    {
        $this->pizza->setCheese(true);

        return $this;
    }

    public function useBacon(): self
    {
        $this->pizza->setBacon(true);

        return $this;
    }

    public function usePineapples(): self
    {
        $this->pizza->setPineapples(true);

        return $this;
    }

    public function useMushrooms(): self
    {
        $this->pizza->setMushrooms(true);

        return $this;
    }

    public function useSeafood(): self
    {
        $this->pizza->setSeafood(true);

        return $this;
    }
    public function build(): PizzaInterface
    {
        return $this->pizza;
    }
}
