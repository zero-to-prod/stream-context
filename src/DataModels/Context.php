<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;
use Zerotoprod\StreamContext\StreamContext;

/**
 * Creates arguments for `StreamContext::create()`.
 *
 * Example:
 * ```
 *  Context::new()
 *      ->set_Options(
 *          Options::new()->set_ssl(
 *              Ssl::new()->set_peer_name('example.com')
 *          )
 *      )
 *      ->set_params([
 *          'parameter1' => 'value1',
 *          'parameter2' => 'value2',
 *      ]);
 *  ```
 *
 * @param  Context|array  $Args
 *
 * @return resource
 *
 * @see  StreamContext::create()
 * @link https://www.php.net/manual/en/function.stream-context-create.php
 * @see  https://github.com/zero-to-prod/stream-context
 *
 * @method self set_context(resource $context) stream context resource
 * @method self set_Options(Options $Options) Must be an associative array in the format $arr['parameter'] = $value, or null
 * @method self set_params(array $params) Must be an associative array in the format $arr['parameter'] = $value, or null
 */
class Context
{
    use DataModel;

    /**
     * The created stream context resource.
     *
     * @link https://php.net/manual/en/function.stream-context-create.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public const context = 'context';

    /**
     * @see  Options
     * @link https://www.php.net/manual/en/context.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public const Options = 'Options';
    /**
     * Must be an associative array in the format $arr['parameter'] = $value, or null
     *
     * @link https://www.php.net/manual/en/context.params.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public const params = 'params';

    /**
     * The created stream context resource.
     *
     * @var resource $context
     *
     * @link https://php.net/manual/en/function.stream-context-create.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public $context;

    /**
     * @var Options $Options
     *
     * @link https://www.php.net/manual/en/context.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public $Options;

    /**
     * Must be an associative array in the format $arr['parameter'] = $value, or null
     *
     * @var array $params
     *
     * @link https://www.php.net/manual/en/context.params.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public $params;

    /**
     * Retrieve the default stream context
     *
     * Returns the default stream context which is used whenever file
     * operations (`fopen()`, `file_get_contents()`, etc...) are called
     * without a context parameter. Options for the default context
     * can optionally be specified with this function using the same
     * syntax as `stream_context_create()`.
     *
     * @return resource
     *
     * @link https://www.php.net/manual/en/function.stream-context-get-default.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public function getDefault()
    {
        return stream_context_get_default($this->Options->toArray());
    }

    /**
     * Returns an array of options on the specified stream or context.
     *
     * @link https://www.php.net/manual/en/function.stream-context-get-options.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public function getOptions(): array
    {
        return stream_context_get_options($this->getDefault());
    }

    /**
     * Retrieves parameter and options information from the stream or context.
     *
     * @link https://www.php.net/manual/en/function.stream-context-get-params.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public function getParams(): array
    {
        return stream_context_get_params($this->getDefault());
    }

    /**
     * Set the default stream context.
     *
     * Set the default stream context which will be used whenever
     * file operations (`fopen()`, `file_get_contents()`, etc...) are
     * called without a context parameter. Uses the same syntax
     * as `stream_context_create()`.
     *
     * @link https://www.php.net/manual/en/function.stream-context-set-default.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public function setDefault(): void
    {
        stream_context_set_default($this->Options->toArray());
    }
}