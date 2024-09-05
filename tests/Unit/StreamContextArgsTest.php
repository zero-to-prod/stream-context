<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\StreamContext\DataModels\Ftp;
use Zerotoprod\StreamContext\DataModels\Http;
use Zerotoprod\StreamContext\DataModels\Options;
use Zerotoprod\StreamContext\DataModels\StreamContextArgs;

class StreamContextArgsTest extends TestCase
{

    /**
     * @test
     *
     * @see StreamContextArgs::getDefault()
     */
    public function stream_context_get_default(): void
    {
        $StreamContextArgs = StreamContextArgs::from([
            StreamContextArgs::Options => [
                Options::http => [
                    Http::method => 'GET',
                    Http::header => "Accept-language: en\r\n"."Cookie: foo=bar",
                    Http::proxy => 'proxy'
                ]
            ]
        ]);

        $subject = $StreamContextArgs->getDefault();

        $this->assertNotNull($subject);
    }

    /**
     * @test
     *
     * @see StreamContextArgs::getDefault()
     */
    public function stream_context_get_default_with_setters(): void
    {
        Ftp::new()
            ->set_overwrite(true)
            ->set_resume_pos(1024)
            ->set_proxy('tcp://proxy.example.com:8000');

        $StreamContextArgs = StreamContextArgs::new()
            ->set_Options(
                Options::new()->set_http(
                    Http::new()
                        ->set_method('GET')
                        ->set_header("Accept-language: en\r\n"."Cookie: foo=bar")
                        ->set_proxy('proxy')
                )
            )->set_params(['s' => 1]);

        $subject = $StreamContextArgs->getDefault();

        $this->assertNotNull($subject);
    }

    /**
     * @test
     *
     * @see StreamContextArgs::getOptions()
     */
    public function stream_context_get_options(): void
    {
        $StreamContextArgs = StreamContextArgs::from([
            StreamContextArgs::Options => [
                Options::http => [
                    Http::method => 'GET',
                    Http::proxy => 'proxy'
                ]
            ]
        ]);

        $subject = $StreamContextArgs->getOptions();

        $this->assertEquals('GET', $subject['http']['method']);
        $this->assertEquals('proxy', $subject['http']['proxy']);
    }

    /**
     * @test
     *
     * @see StreamContextArgs::getParams()
     */
    public function stream_context_get_params(): void
    {
        $StreamContextArgs = StreamContextArgs::from([
            StreamContextArgs::Options => [
                Options::http => [
                    Http::method => 'GET',
                    Http::proxy => 'proxy'
                ]
            ]
        ]);

        $subject = $StreamContextArgs->getParams();

        $this->assertEquals('GET', $subject['options']['http']['method']);
        $this->assertEquals('proxy', $subject['options']['http']['proxy']);
    }

    /**
     * @test
     *
     * @see StreamContextArgs::setDefault()
     */
    public function stream_context_set_default(): void
    {
        $StreamContextArgs = StreamContextArgs::from([
            StreamContextArgs::Options => [
                Options::http => [
                    Http::method => 'GET',
                    Http::header => "Accept-language: en\r\n"."Cookie: foo=bar",
                    Http::proxy => 'proxy'
                ]
            ]
        ]);

        $StreamContextArgs->setDefault();

        $this->assertEquals(stream_context_get_default(), $StreamContextArgs->getDefault());
    }
}