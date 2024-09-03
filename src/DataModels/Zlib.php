<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;

/**
 * Zlib context options — Zlib context option listing
 * Zlib context options are available for zlib wrappers.
 * Example:
 * ```
 *  Zlib::from([
 *      Zlib::level => 1
 *  ]);
 * ```
 *
 * @see https://www.php.net/manual/en/context.zlib.php
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