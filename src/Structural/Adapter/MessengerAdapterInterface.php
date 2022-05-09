<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Adapter;

interface MessengerAdapterInterface
{
    public function send(string $receiver, string $message): string;
}
