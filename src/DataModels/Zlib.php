<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;

/**
 * Zlib context options — Zlib context option listing
 * Zlib context options are available for zlib wrappers.
 * Example:
 * ```
 * Zlib::new()->set_level(1);
 * ```
 *
 * @see https://www.php.net/manual/en/context.zlib.php
 *
 * @method self set_level(int $level) Used to specify the compression level (0 - 9).
 * @link https://github.com/zero-to-prod/stream-context
 */
class Zlib
{
    use DataModel;

    /**
     * Used to specify the compression level (0 - 9).
     *
     * @see https://www.php.net/manual/en/context.zlib.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const level = 'level';

    /**
     * Used to specify the compression level (0 - 9).
     *
     * @var int $level
     *
     * @see https://www.php.net/manual/en/context.zlib.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $level;
}