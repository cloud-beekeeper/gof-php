<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Facade;

interface HttpClientInterface
{
    public function post(string $url, string $xml): string;
}
