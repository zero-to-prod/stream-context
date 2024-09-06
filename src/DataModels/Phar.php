<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;

/**
 * Phar context options — Phar context option listing
 * Context options for `phar://` wrapper.
 *
 * Example:
 * ```
 *  Phar::new()
 *      ->set_compress('gz')
 *      ->set_metadata(['author' => 'John Doe']);
 * ```
 *
 * @link https://www.php.net/manual/en/context.phar.php
 * @see  https://github.com/zero-to-prod/stream-context
 *
 * @method self set_compress(int $compress) One of Phar compression constants.
 * @method self set_metadata(mixed $metadata) Phar metadata.
 */
class Phar
{
    use DataModel;

    /**
     * One of Phar compression constants.
     *
     * @link https://www.php.net/manual/en/context.phar.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public const compress = 'compress';
    /**
     * Phar metadata. See Phar::setMetadata().
     *
     * @link https://www.php.net/manual/en/context.phar.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public const metadata = 'metadata';

    /**
     * One of Phar compression constants.
     *
     * @var int $compress
     *
     * @link https://www.php.net/manual/en/context.phar.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public $compress;

    /**
     * Phar metadata. See Phar::setMetadata().
     *
     * @var mixed $metadata
     *
     * @link https://www.php.net/manual/en/context.phar.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public $metadata;
}