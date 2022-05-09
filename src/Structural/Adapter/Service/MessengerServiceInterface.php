<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Adapter\Service;

interface MessengerServiceInterface
{
    public function send(string $receiver, string $message): string;
}
