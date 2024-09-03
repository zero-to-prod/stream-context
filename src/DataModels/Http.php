<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;

/**
 * HTTP context options — HTTP context option listing
 * Context options for http:// and https:// transports.
 *
 * Example:
 * ```
 *  Http::from([
 *      Http::method => 'POST',
 *      Http::header => [
 *          'Content-Type: application/json',
 *          'Authorization: Bearer token'
 *      ],
 *      Http::content => json_encode(['key' => 'value']),
 *      Http::timeout => 30.0,
 *      Http::follow_location => 0,
 *  ]);
 *
 * @see https://www.php.net/manual/en/context.http.php
 */
class Http
{
    use DataModel;

    public const method = 'method';
    public const header = 'header';
    public const user_agent = 'user_agent';
    public const content = 'content';
    public const proxy = 'proxy';
    public const request_fulluri = 'request_fulluri';
    public const follow_location = 'follow_location';
    public const max_redirects = 'max_redirects';
    public const protocol_version = 'protocol_version';
    public const timeout = 'timeout';
    public const ignore_errors = 'ignore_errors';

    /**
     * GET, POST, or any other HTTP method supported by the remote server.
     *
     * Defaults to GET.
     *
     * @var string $method
     */
    public $method = 'GET';

    /**
     * Additional headers to be sent during request. Values in this option
     * will override other values (such as User-agent:, Host:, and
     * Authentication:), even when following Location: redirects. Thus it
     * is not recommended to set a Host: header, if follow_location is enabled.
     *
     * @var array|string $header
     */
    public $header;

    /**
     * Value to send with User-Agent: header. This value will only be used if
     * user-agent is not specified in the header context option above.
     *
     * By default the user_agent php.ini setting is used.
     *
     * @var string $user_agent
     */
    public $user_agent;

    /**
     * Additional data to be sent after the headers. Typically used with POST
     * or PUT requests.
     *
     * @var string $content
     */
    public $content;

    /**
     * URI specifying address of proxy server (e.g. tcp://proxy.example.com:5100).
     *
     * @var string $proxy
     */
    public $proxy;

    /**
     * When set to true, the entire URI will be used when constructing the
     * request (e.g. GET http://www.example.com/path/to/file.html HTTP/1.0).
     * While this is a non-standard request format, some proxy servers
     * require it.
     *
     * Defaults to false.
     *
     * @var bool $request_fulluri
     */
    public $request_fulluri = false;

    /**
     * Follow Location header redirects. Set to 0 to disable.
     *
     * Defaults to 1.
     *
     * @var int $follow_location
     */
    public $follow_location = 1;

    /**
     * The max number of redirects to follow. Value 1 or less means that no
     * redirects are followed.
     *
     * Defaults to 20.
     *
     * @var int $max_redirects
     */
    public $max_redirects = 20;

    /**
     * HTTP protocol version.
     *
     * Defaults to 1.1 as of PHP 8.0.0; prior to that version the default
     * was 1.0.
     *
     * @var float $protocol_version
     */
    public $protocol_version = 1.1;

    /**
     * Read timeout in seconds, specified by a float (e.g. 10.5).
     *
     * By default the default_socket_timeout php.ini setting is used.
     *
     * @var float $timeout
     */
    public $timeout;

    /**
     * Fetch the content even on failure status codes.
     *
     * Defaults to false.
     *
     * @var bool $ignore_errors
     */
    public $ignore_errors = false;
}
