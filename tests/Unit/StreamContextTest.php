<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\DataModel\DataModel;
use Zerotoprod\StreamContext\DataModels\Options;
use Zerotoprod\StreamContext\DataModels\Ssl;
use Zerotoprod\StreamContext\DataModels\StreamContextArgs;
use Zerotoprod\StreamContext\StreamContext;

class StreamContextTest extends TestCase
{
    public function urls(): array
    {
        return [
            'neverssl.com' => ['neverssl.com'],
            'google.com' => ['google.com'],
        ];
    }

    /**
     * @test
     * @dataProvider urls
     *
     * @see          DataModel
     */
    public function from_data_models(string $url): void
    {
        $client = stream_socket_client(
            'ssl://'.$url.':'. 443,
            $error_code,
            $error_message,
            30,
            STREAM_CLIENT_CONNECT,
            StreamContext::create(
                StreamContextArgs::from([
                    StreamContextArgs::Options => Options::from([
                        Options::ssl => Ssl::from([
                            Ssl::peer_name => $url
                        ])
                    ])
                ])
            )
        );

        self::assertNotNull(
            stream_socket_get_name($client, true)
        );

        fclose($client);
    }

    /**
     * @test
     * @dataProvider urls
     *
     * @see          DataModel
     */
    public function from_array(string $url): void
    {
        $client = stream_socket_client(
            'ssl://'.$url.':'. 443,
            $error_code,
            $error_message,
            30,
            STREAM_CLIENT_CONNECT,
            StreamContext::create([
                StreamContextArgs::Options => [
                    Options::ssl => [
                        Ssl::peer_name => $url
                    ]
                ],
                StreamContextArgs::params => []
            ])
        );

        self::assertNotNull(
            stream_socket_get_name($client, true)
        );

        fclose($client);
    }

    /**
     * @test
     * @dataProvider urls
     *
     * @see          DataModel
     */
    public function no_args(string $url): void
    {
        $client = stream_socket_client(
            'ssl://'.$url.':'. 443,
            $error_code,
            $error_message,
            30,
            STREAM_CLIENT_CONNECT,
            StreamContext::create()
        );

        self::assertNotNull(
            stream_socket_get_name($client, true)
        );

        fclose($client);
    }
}