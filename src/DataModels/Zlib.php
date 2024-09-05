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
 * @see https://github.com/zero-to-prod/stream-context
 *
 * @method self set_level(int $level)
 */
class Zlib
{
    use DataModel;

    public const level = 'level';

    /**
     * Used to specify the compression level (0 - 9).
     *
     * @var int $level
     */
    public $level;
}