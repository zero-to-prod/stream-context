<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\DataModel\DataModel;
use Zerotoprod\StreamContext\DataModels\Context;
use Zerotoprod\StreamContext\DataModels\Options;
use Zerotoprod\StreamContext\DataModels\Ssl;
use Zerotoprod\StreamContext\StreamContext;

class StreamContextTest extends TestCase
{
    public static function urls(): array
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
                Options::from([
                    Options::ssl => [
                        Ssl::peer_name => $url
                    ]
                ])
            )->context
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
                Context::Options => [
                    Options::ssl => [
                        Ssl::peer_name => $url
                    ]
                ],
                Context::params => []
            ])->context
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
            StreamContext::create()->context
        );

        self::assertNotNull(
            stream_socket_get_name($client, true)
        );

        fclose($client);
    }
}