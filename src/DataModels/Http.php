<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;

/**
 * HTTP context options — HTTP context option listing
 * Context options for http:// and https:// transports.
 *
 * Example:
 * ```
 *  Http::new()
 *      ->set_method('POST')
 *      ->set_header([
 *          'Content-Type: application/json',
 *          'Authorization: Bearer token'
 *      ])
 *      ->set_user_agent('MyUserAgent/1.0')
 *      ->set_content(json_encode(['key' => 'value']))
 *      ->set_proxy('tcp://proxy.example.com:5100')
 *      ->set_request_fulluri(true)
 *      ->set_follow_location(0)
 *      ->set_max_redirects(5)
 *      ->set_protocol_version(1.1)
 *      ->set_timeout(30.0)
 *      ->set_ignore_errors(true);
 * ```
 *
 * @see https://www.php.net/manual/en/context.http.php
 *
 * @method self set_method(string $method) GET, POST, or any other HTTP method supported by the remote server.
 * @method self set_header(array|string $header) Additional headers to be sent during request.
 * @method self set_user_agent(string $user_agent) Value to send with User-Agent: header. This value will only be used if user-agent is not specified in the header context option above.
 * @method self set_content(string $content) Additional data to be sent after the headers. Typically used with POST
 * @method self set_proxy(string $proxy) URI specifying address of proxy server (e.g. tcp://proxy.example.com:5100).
 * @method self set_request_fulluri(bool $request_fulluri) When set to true, the entire URI will be used when constructing the request
 * @method self set_follow_location(int $follow_location) Follow Location header redirects. Set to 0 to disable.
 * @method self set_max_redirects(int $max_redirects) The max number of redirects to follow. Value 1 or less means that no redirects are followed.
 * @method self set_protocol_version(float $protocol_version) HTTP protocol version.
 * @method self set_timeout(float $timeout) Read timeout in seconds, specified by a float (e.g. 10.5).
 * @method self set_ignore_errors(bool $ignore_errors) Fetch the content even on failure status codes.
 * @link https://github.com/zero-to-prod/stream-context
 */
class Http
{
    use DataModel;

    /**
     * GET, POST, or any other HTTP method supported by the remote server.
     *
     * Defaults to GET.
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const method = 'method';
    /**
     * Additional headers to be sent during request. Values in this option
     * will override other values (such as User-agent:, Host:, and
     * Authentication:), even when following Location: redirects. Thus it
     * is not recommended to set a Host: header, if follow_location is enabled.
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const header = 'header';
    /**
     * Value to send with User-Agent: header. This value will only be used if
     * user-agent is not specified in the header context option above.
     *
     * By default the user_agent php.ini setting is used.
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const user_agent = 'user_agent';
    /**
     * Additional data to be sent after the headers. Typically used with POST
     * or PUT requests.
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const content = 'content';
    /**
     * URI specifying address of proxy server (e.g. tcp://proxy.example.com:5100).
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const proxy = 'proxy';
    /**
     * When set to true, the entire URI will be used when constructing the
     * request (e.g. GET http://www.example.com/path/to/file.html HTTP/1.0).
     * While this is a non-standard request format, some proxy servers
     * require it.
     *
     * Defaults to false.
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const request_fulluri = 'request_fulluri';
    /**
     * Follow Location header redirects. Set to 0 to disable.
     *
     * Defaults to 1.
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const follow_location = 'follow_location';
    /**
     * The max number of redirects to follow. Value 1 or less means that no
     * redirects are followed.
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const max_redirects = 'max_redirects';
    /**
     * HTTP protocol version.
     *
     * Defaults to 1.1 as of PHP 8.0.0; prior to that version the default
     * was 1.0.
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const protocol_version = 'protocol_version';
    /**
     * Read timeout in seconds, specified by a float (e.g. 10.5).
     *
     * By default the default_socket_timeout php.ini setting is used.
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const timeout = 'timeout';
    /**
     * Fetch the content even on failure status codes.
     *
     * Defaults to false.
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const ignore_errors = 'ignore_errors';

    /**
     * GET, POST, or any other HTTP method supported by the remote server.
     *
     * Defaults to GET.
     *
     * @var string $method
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $method = 'GET';

    /**
     * Additional headers to be sent during request. Values in this option
     * will override other values (such as User-agent:, Host:, and
     * Authentication:), even when following Location: redirects. Thus it
     * is not recommended to set a Host: header, if follow_location is enabled.
     *
     * @var array|string $header
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $header;

    /**
     * Value to send with User-Agent: header. This value will only be used if
     * user-agent is not specified in the header context option above.
     *
     * By default the user_agent php.ini setting is used.
     *
     * @var string $user_agent
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $user_agent;

    /**
     * Additional data to be sent after the headers. Typically used with POST
     * or PUT requests.
     *
     * @var string $content
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $content;

    /**
     * URI specifying address of proxy server (e.g. tcp://proxy.example.com:5100).
     *
     * @var string $proxy
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
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
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $request_fulluri = false;

    /**
     * Follow Location header redirects. Set to 0 to disable.
     *
     * Defaults to 1.
     *
     * @var int $follow_location
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $follow_location = 1;

    /**
     * The max number of redirects to follow. Value 1 or less means that no
     * redirects are followed.
     *
     * @var int $max_redirects
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $max_redirects;

    /**
     * HTTP protocol version.
     *
     * Defaults to 1.1 as of PHP 8.0.0; prior to that version the default
     * was 1.0.
     *
     * @var float $protocol_version
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $protocol_version = 1.1;

    /**
     * Read timeout in seconds, specified by a float (e.g. 10.5).
     *
     * By default the default_socket_timeout php.ini setting is used.
     *
     * @var float $timeout
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $timeout;

    /**
     * Fetch the content even on failure status codes.
     *
     * Defaults to false.
     *
     * @var bool $ignore_errors
     *
     * @see https://www.php.net/manual/en/context.http.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $ignore_errors = false;
}
