<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Adapter;

use Edubovic\GofPhp\Structural\Adapter\Service\TelegramMessengerService;

final class TelegramMessengerAdapter implements MessengerAdapterInterface
{
    private TelegramMessengerService $telegramService;

    public function __construct(TelegramMessengerService $telegramService)
    {
        $this->telegramService = $telegramService;
    }

    public function send(string $receiver, string $message): string
    {
        return $this->telegramService->send($receiver, $message);
    }
}
