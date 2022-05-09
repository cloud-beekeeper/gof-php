<?php

declare(strict_types=1);

namespace Edubovic\GofPhp\Structural\Facade;

use WpOrg\Requests\Requests;

final class HttpClient implements HttpClientInterface
{
    public function post(string $url, string $xml): string
    {
        $headers = [
            'Content-Type' => 'application/soap+xml; charset=utf-8',
        ];

        $request = Requests::post($url, $headers, $xml);

        return $request->body;
    }
}
