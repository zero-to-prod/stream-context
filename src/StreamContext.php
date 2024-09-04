<?php

namespace Zerotoprod\StreamContext;

use Zerotoprod\StreamContext\DataModels\StreamContextArgs;

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
 * @see https://github.com/zero-to-prod/stream-context
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
     *  StreamContext::create(
     *      StreamContextArgs::from([
     *          StreamContextArgs::Options => [
     *              Options::ssl => [
     *                  Ssl::peer_name => $url,
     *              ]
     *          ]
     *      ])
     *  );
     *  ```
     *
     * @param  StreamContextArgs|array  $Args
     *
     * @return resource
     * @see https://www.php.net/manual/en/function.stream-context-create.php
     * @see https://github.com/zero-to-prod/stream-context
     */
    public static function create($Args = null)
    {
        return !$Args
            ? stream_context_create()
            : stream_context_create(
                is_array($Args)
                    ? StreamContextArgs::from($Args)->Options->toArray()
                    : $Args->Options->toArray(),
                $Args->params
            );
    }
}
