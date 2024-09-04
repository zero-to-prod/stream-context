<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;
use Zerotoprod\StreamContext\StreamContext;

/**
 * Creates arguments for `StreamContext::create()`.
 *
 * Example:
 * ```
 *  StreamContextArgs::from([
 *      StreamContextArgs::Options => Options::from([
 *          Options::ssl => Ssl::from([
 *              Ssl::peer_name => $url,
 *          ])
 *      ])
 *  ]);
 *  ```
 *
 * @param  StreamContextArgs|array  $Args
 *
 * @return resource
 *
 * @see StreamContext::create()
 * @see https://www.php.net/manual/en/function.stream-context-create.php
 * @see https://github.com/zero-to-prod/stream-context
 */
class StreamContextArgs
{
    use DataModel;

    public const Options = 'Options';
    public const params = 'params';

    /** @var Options $Options */
    public $Options;

    /**
     * Must be an associative array in the format $arr['parameter'] = $value, or null
     *
     * @var array $params
     */
    public $params;
}