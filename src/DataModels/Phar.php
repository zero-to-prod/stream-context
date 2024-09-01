<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;

/**
 * Phar context options — Phar context option listing
 * Context options for phar:// wrapper.
 *
 * @see https://www.php.net/manual/en/context.phar.php
 */
class Phar
{
    use DataModel;

    public const compress = 'compress';
    public const metadata = 'metadata';

    /**
     * One of Phar compression constants.
     *
     * @var int $compress
     */
    public $compress;

    /**
     * Phar metadata. See Phar::setMetadata().
     *
     * @var mixed $metadata
     */
    public $metadata;
}