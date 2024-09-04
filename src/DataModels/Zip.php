<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;

/**
 * Zip context options — Zip context option listing
 * Zip context options are available for zip wrappers.
 * Example:
 * ```
 *  Zip::from([
 *      Zip::password => 'secret'
 *  ]);
 * ```
 *
 * @see https://www.php.net/manual/en/context.zip.php
 * @see https://github.com/zero-to-prod/stream-context
 */
class Zip
{
    use DataModel;

    public const password = 'password';

    /**
     * Used to specify password used for encrypted archive.
     *
     * @var string $password
     */
    public $password;
}