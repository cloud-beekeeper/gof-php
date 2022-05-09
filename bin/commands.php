<?php

declare(strict_types=1);

use Edubovic\GofPhp\Console\Creational\AbstractFactoryCommand;
use Edubovic\GofPhp\Console\Creational\BuilderCommand;
use Edubovic\GofPhp\Console\Creational\FactoryMethodCommand;
use Edubovic\GofPhp\Console\Creational\PrototypeCommand;
use Edubovic\GofPhp\Console\Creational\SingletonCommand;
use Edubovic\GofPhp\Console\Structural\AdapterCommand;
use Edubovic\GofPhp\Console\Structural\BridgeCommand;
use Edubovic\GofPhp\Console\Structural\CompositeCommand;
use Edubovic\GofPhp\Console\Structural\DecoratorCommand;
use Edubovic\GofPhp\Console\Structural\FacadeCommand;
use Edubovic\GofPhp\Console\Structural\FlyweightCommand;
use Edubovic\GofPhp\Console\Structural\ProxyCommand;

return [
    FactoryMethodCommand::class => [
        'alias' => FactoryMethodCommand::ALIAS,
        'name' => FactoryMethodCommand::NAME,
        'description' => FactoryMethodCommand::DESCRIPTION,
    ],
    AbstractFactoryCommand::class => [
        'alias' => AbstractFactoryCommand::ALIAS,
        'name' => AbstractFactoryCommand::NAME,
        'description' => AbstractFactoryCommand::DESCRIPTION,
    ],
    PrototypeCommand::class => [
        'alias' => PrototypeCommand::ALIAS,
        'name' => PrototypeCommand::NAME,
        'description' => PrototypeCommand::DESCRIPTION,
    ],
    BuilderCommand::class => [
        'alias' => BuilderCommand::ALIAS,
        'name' => BuilderCommand::NAME,
        'description' => BuilderCommand::DESCRIPTION,
    ],
    SingletonCommand::class => [
        'alias' => SingletonCommand::ALIAS,
        'name' => SingletonCommand::NAME,
        'description' => SingletonCommand::DESCRIPTION,
    ],

    AdapterCommand::class => [
        'alias' => AdapterCommand::ALIAS,
        'name' => AdapterCommand::NAME,
        'description' => AdapterCommand::DESCRIPTION,
    ],
    BridgeCommand::class => [
        'alias' => BridgeCommand::ALIAS,
        'name' => BridgeCommand::NAME,
        'description' => BridgeCommand::DESCRIPTION,
    ],
    CompositeCommand::class => [
        'alias' => CompositeCommand::ALIAS,
        'name' => CompositeCommand::NAME,
        'description' => CompositeCommand::DESCRIPTION,
    ],
    DecoratorCommand::class => [
        'alias' => DecoratorCommand::ALIAS,
        'name' => DecoratorCommand::NAME,
        'description' => DecoratorCommand::DESCRIPTION,
    ],
    FacadeCommand::class => [
        'alias' => FacadeCommand::ALIAS,
        'name' => FacadeCommand::NAME,
        'description' => FacadeCommand::DESCRIPTION,
    ],
    FlyweightCommand::class => [
        'alias' => FlyweightCommand::ALIAS,
        'name' => FlyweightCommand::NAME,
        'description' => FlyweightCommand::DESCRIPTION,
    ],
    ProxyCommand::class => [
        'alias' => ProxyCommand::ALIAS,
        'name' => ProxyCommand::NAME,
        'description' => ProxyCommand::DESCRIPTION,
    ],
];
