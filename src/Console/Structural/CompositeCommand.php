<?php

namespace Edubovic\GofPhp\Console\Structural;

use Edubovic\GofPhp\Console\AbstractBaseCommand;
use Edubovic\GofPhp\Structural\Composite\Composite;
use Edubovic\GofPhp\Structural\Composite\Leaf;

class CompositeCommand extends AbstractBaseCommand
{
    public const NAME = 'composite';
    public const DESCRIPTION = '';
    public const ALIAS = 's-c';

    public function execute(): void
    {
        $io = $this->app()->io();

        $aLeaf = new Leaf(1);
        $bLeaf = new Leaf(2);

        $aComposite = new Composite();
        $aComposite->addComponent($aLeaf);
        $aComposite->addComponent($bLeaf);

        $bComposite = new Composite();
        $bComposite->addComponent($aComposite);

        $rootComposite = new Composite();
        $rootComposite->addComponent($bComposite);

        $io->green($rootComposite->render(), true);

//        $rootComposite->decrement();
//        $io->green($rootComposite->render(), true);
//
//        $rootComposite->increment();
//        $io->green($rootComposite->render(), true);

        $io->ok('Done', true);
    }
}
