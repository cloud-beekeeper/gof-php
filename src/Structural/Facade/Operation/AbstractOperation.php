<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Facade\Operation;

use Edubovic\GofPhp\Structural\Facade\HttpClientInterface;

abstract class AbstractOperation implements OperationInterface
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getHttpClient(): HttpClientInterface
    {
        return $this->httpClient;
    }

    protected function getHost(): string
    {
        return 'http://www.dneonline.com/calculator.asmx';
    }
}
