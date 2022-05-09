<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Creational\Builder;

interface PizzaBuilderInterface
{
    public function useCheese(): self;
    public function useBacon(): self;
    public function usePineapples(): self;
    public function useMushrooms(): self;
    public function useSeafood(): self;
    public function build(): PizzaInterface;
}
