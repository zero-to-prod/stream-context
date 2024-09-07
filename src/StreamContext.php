<?php

namespace Zerotoprod\StreamContext;

use Zerotoprod\StreamContext\DataModels\Context;
use Zerotoprod\StreamContext\DataModels\Options;

/**
 * Class StreamContext
 *
 * StreamContext is a utility for creating and managing stream contexts with custom options
 * for different protocols, such as HTTP, FTP, SSL, Phar, Zip, and Zlib.
 *
 * Usage:
 * - Use `create()` to generate a stream context with specified options and parameters.
 * - The method accepts an `Options` object for protocol-specific settings and an optional
 *   array of parameters.
 *
 * @link https://www.php.net/manual/en/function.stream-context-create.php
 * @see  https://github.com/zero-to-prod/stream-context
 */
class StreamContext
{
    /**
     * Creates a stream context
     * Creates and returns a stream context with any options supplied in options preset.
     * Example:
     * ```
     *  StreamContext::create();
     *  // or
     *  StreamContext::create([
     *      Options::http => [
     *          Http::method => 'GET',
     *          Http::header => "Accept-language: en\r\n"."Cookie: foo=bar",
     *          Http::proxy => 'proxy'
     *      ],
     *      ['options']
     *  ]);
     *  ```
     *
     * @param  Options|array  $options
     * @param  array          $params
     *
     * @return Context
     *
     * @link https://www.php.net/manual/en/function.stream-context-create.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public static function create($options = [], array $params = []): Context
    {
        return Context::from([
            Context::Options => $options,
            Context::context => stream_context_create(
                is_object($options) && method_exists($options, 'toArray')
                    ? $options->toArray()
                    : $options,
                $params
            ),
            Context::params => $params
        ]);
    }
}
