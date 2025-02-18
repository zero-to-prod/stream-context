<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;

/**
 * Zip context options — Zip context option listing
 * Zip context options are available for zip wrappers.
 * Example:
 * ```
 *  Zip::new()->set_password('secret');
 * ```
 *
 * @see https://www.php.net/manual/en/context.zip.php
 *
 * @method self set_password(string $password) Used to specify password used for encrypted archive.
 * @link https://github.com/zero-to-prod/stream-context
 */
class Zip
{
    use DataModel;

    /**
     * Used to specify password used for encrypted archive.
     *
     * @see https://www.php.net/manual/en/context.zip.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const password = 'password';

    /**
     * Used to specify password used for encrypted archive.
     *
     * @var string $password
     *
     * @see https://www.php.net/manual/en/context.zip.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $password;
}