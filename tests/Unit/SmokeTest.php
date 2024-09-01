<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\DataModel\DataModel;
use Zerotoprod\StreamContext\DataModels\Ssl;
use Zerotoprod\StreamContext\DataModels\Options;
use Zerotoprod\StreamContext\StreamContext;

class SmokeTest extends TestCase
{
    public function urlProvider(): array
    {
        return [
            'neverssl.com' => ['neverssl.com'],
            'google.com' => ['google.com'],
        ];
    }

    /**
     * @test
     * @dataProvider urlProvider
     *
     * @see          DataModel
     */
    public function smoke_test(string $url): void
    {
        $client = stream_socket_client(
            'ssl://'.$url.':'. 443,
            $error_code,
            $error_message,
            30,
            STREAM_CLIENT_CONNECT,
            StreamContext::create(
                Options::from([
                    Options::ssl => [
                        Ssl::peer_name => $url
                    ]
                ])
            )
        );

        self::assertNotNull(
            stream_socket_get_name($client, true)
        );

        fclose($client);
    }
}