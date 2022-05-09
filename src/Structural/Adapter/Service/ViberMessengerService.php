<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Adapter\Service;

final class ViberMessengerService implements MessengerServiceInterface
{
    public function send(string $receiver, string $message): string
    {
        return "Viber\n" . "receiver: {$receiver}\n" . "message: {$message}\n";
    }
}
