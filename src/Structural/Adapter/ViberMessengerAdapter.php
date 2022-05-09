<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Adapter;

use Edubovic\GofPhp\Structural\Adapter\Service\ViberMessengerService;

final class ViberMessengerAdapter implements MessengerAdapterInterface
{
    private ViberMessengerService $viberService;

    public function __construct(ViberMessengerService $viberService)
    {
        $this->viberService = $viberService;
    }

    public function send(string $receiver, string $message): string
    {
        return $this->viberService->send($receiver, $message);
    }
}
