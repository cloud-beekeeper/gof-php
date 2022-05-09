<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Console\Creational;

use Edubovic\GofPhp\Console\AbstractBaseCommand;
use Edubovic\GofPhp\Creational\Builder\Pizza;

final class BuilderCommand extends AbstractBaseCommand
{
    public const NAME = 'builder';
    public const DESCRIPTION = '';
    public const ALIAS = 'c-b';

    public function execute(): void
    {
        $io = $this->app()->io();

        $pizzaBuilder = Pizza::builder();
        $pizza = $pizzaBuilder
            ->useCheese()
            ->useBacon()
            ->usePineapples()
            ->useMushrooms()
            ->useSeafood()
            ->build();

        $io->blackBgGreen("Cheese: {$this->normalizeBool($pizza->isCheese())}", true);
        $io->blackBgGreen("Bacon: {$this->normalizeBool($pizza->isBacon())}", true);
        $io->blackBgGreen("Pineapples: {$this->normalizeBool($pizza->isPineapples())}", true);
        $io->blackBgGreen("Mushrooms: {$this->normalizeBool($pizza->isMushrooms())}", true);
        $io->blackBgGreen("Seafood: {$this->normalizeBool($pizza->isSeafood())}", true);

        $io->ok('Done', true);
    }

    private function normalizeBool(bool $value): string
    {
        return $value ? 'Yes' : 'No';
    }
}
