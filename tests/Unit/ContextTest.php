<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\StreamContext\DataModels\Context;
use Zerotoprod\StreamContext\DataModels\Http;
use Zerotoprod\StreamContext\DataModels\Options;
use Zerotoprod\StreamContext\StreamContext;

class ContextTest extends TestCase
{

    /**
     * @test
     *
     * @see Context::getDefault()
     */
    public function from_Options(): void
    {
        $Context = StreamContext::create(
            Options::from([
                Options::http => [
                    Http::method => 'GET',
                    Http::header => "Accept-language: en\r\n"."Cookie: foo=bar",
                    Http::proxy => 'proxy'
                ]
            ])
        );

        $subject = $Context->getDefault();

        $this->assertNotNull($subject);
    }

    /**
     * @test
     *
     * @see Context::getDefault()
     */
    public function from_array(): void
    {
        $Context = StreamContext::create([
            Options::http => [
                Http::method => 'GET',
                Http::header => "Accept-language: en\r\n"."Cookie: foo=bar",
                Http::proxy => 'proxy'
            ]
        ]);

        $subject = $Context->getDefault();

        $this->assertNotNull($subject);
    }

    /**
     * @test
     *
     * @see Context::getDefault()
     */
    public function stream_context_get_default_with_setters(): void
    {
        $Context = Context::new()
            ->set_Options(
                Options::new()->set_http(
                    Http::new()
                        ->set_method('GET')
                        ->set_header("Accept-language: en\r\n"."Cookie: foo=bar")
                        ->set_proxy('proxy')
                )
            )->set_params(['s' => 1]);

        $subject = $Context->getDefault();

        $this->assertNotNull($subject);
    }

    /**
     * @test
     *
     * @see Context::getOptions()
     */
    public function stream_context_get_options(): void
    {
        $Context = Context::from([
            Context::Options => [
                Options::http => [
                    Http::method => 'GET',
                    Http::proxy => 'proxy'
                ]
            ]
        ]);

        $subject = $Context->getOptions();

        $this->assertEquals('GET', $subject['http']['method']);
        $this->assertEquals('proxy', $subject['http']['proxy']);
    }

    /**
     * @test
     *
     * @see Context::getParams()
     */
    public function stream_context_get_params(): void
    {
        $Context = Context::from([
            Context::Options => [
                Options::http => [
                    Http::method => 'GET',
                    Http::proxy => 'proxy'
                ]
            ]
        ]);

        $subject = $Context->getParams();

        $this->assertEquals('GET', $subject['options']['http']['method']);
        $this->assertEquals('proxy', $subject['options']['http']['proxy']);
    }

    /**
     * @test
     *
     * @see Context::setDefault()
     */
    public function stream_context_set_default(): void
    {
        $Context = Context::from([
            Context::Options => [
                Options::http => [
                    Http::method => 'GET',
                    Http::header => "Accept-language: en\r\n"."Cookie: foo=bar",
                    Http::proxy => 'proxy'
                ]
            ]
        ]);

        $Context->setDefault();

        $this->assertEquals(stream_context_get_default(), $Context->getDefault());
    }
}