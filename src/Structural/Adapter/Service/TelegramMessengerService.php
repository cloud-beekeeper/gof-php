<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Adapter\Service;

final class TelegramMessengerService implements MessengerServiceInterface
{
    public function send(string $receiver, string $message): string
    {
        return "Telegram\n" . "receiver: {$receiver}\n" . "message: {$message}\n";
    }
}
