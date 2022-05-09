<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Console\Structural;

use Edubovic\GofPhp\Console\AbstractBaseCommand;
use Edubovic\GofPhp\Structural\Adapter\Service\TelegramMessengerService;
use Edubovic\GofPhp\Structural\Adapter\Service\ViberMessengerService;
use Edubovic\GofPhp\Structural\Adapter\TelegramMessengerAdapter;
use Edubovic\GofPhp\Structural\Adapter\ViberMessengerAdapter;

final class AdapterCommand extends AbstractBaseCommand
{
    public const NAME = 'adapter';
    public const DESCRIPTION = '';
    public const ALIAS = 's-a';

    public function execute(): void
    {
        $io = $this->app()->io();

        $viberAdapter = new ViberMessengerAdapter(new ViberMessengerService());
        $telegramAdapter = new TelegramMessengerAdapter(new TelegramMessengerService());

        $io->blackBgGreen($viberAdapter->send('123456789', 'Viber message'), true);
        $io->blackBgGreen($telegramAdapter->send('123456789', 'Telegram message'), true);

        $io->ok('Done', true);
    }
}
