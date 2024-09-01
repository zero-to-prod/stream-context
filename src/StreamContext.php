<?php

namespace Zerotoprod\StreamContext;

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
 * Example:
 * ```php
 * $context = StreamContext::create(
 *      Options::from([
 *          Options::ssl => [
 *              Ssl::peer_name => $url
 *          ]
 *  ])
 * ```
 */
class StreamContext
{
    /**
     * Creates a stream context
     * Creates and returns a stream context with any options supplied in options preset.
     *
     * @param  Options  $Options
     * Must be an associative array of associative arrays in the format $arr['wrapper']['option'] = $value, or null.
     *
     * @param  array    $params
     * Must be an associative array in the format $arr['parameter'] = $value, or null.
     *
     * @return resource
     *
     * @see https://www.php.net/manual/en/function.stream-context-create.php
     */
    public static function create(Options $Options, array $params = [])
    {
        $options = [];
        if ($Options->http) {
            $options[Options::http] = $Options->http->toArray();
        }
        if ($Options->ftp) {
            $options[Options::ftp] = $Options->ftp->toArray();
        }
        if ($Options->ssl) {
            $options[Options::ssl] = $Options->ssl->toArray();
        }
        if ($Options->phar) {
            $options[Options::phar] = $Options->phar->toArray();
        }
        if ($Options->zip) {
            $options[Options::zip] = $Options->zip->toArray();
        }
        if ($Options->zlib) {
            $options[Options::zlib] = $Options->zlib->toArray();
        }

        return stream_context_create($options, $params);
    }
}
