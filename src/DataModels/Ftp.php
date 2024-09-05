<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;

/**
 * FTP context options — FTP context option listing.
 * Context options for `ftp://` and `ftps://` transports.
 *
 * Note: Underlying socket stream context options
 * Additional context options may be supported by
 * the underlying transport. For `ftp://` streams,
 * refer to context options for the `tcp://` transport.
 * For `ftps://` streams, refer to context options
 * for the `ssl://` transport.
 *
 * Example:
 * ```
 *  Ftp::new()
 *      ->set_overwrite(true)
 *      ->set_resume_pos(1024)
 *      ->set_proxy('tcp://proxy.example.com:8000');
 * ```
 *
 * @see https://www.php.net/manual/en/context.ftp.php
 * @see https://github.com/zero-to-prod/stream-context
 *
 * @method self set_overwrite(bool $overwrite) Allow overwriting of already existing files on remote server. Applies to write mode (uploading) only.
 * @method self set_resume_pos(int $pos) File offset at which to begin transfer. Applies to read mode (downloading) only.
 * @method self set_proxy(string $proxy) Proxy FTP request via http proxy server. Applies to file read operations only.
 */
class Ftp
{
    use DataModel;

    public const overwrite = 'overwrite';
    public const resume_pos = 'resume_pos';
    public const proxy = 'proxy';

    /**
     * Allow overwriting of already existing files on remote server.
     * Applies to write mode (uploading) only.
     *
     * Defaults to false.
     *
     * @var bool $overwrite
     */
    public $overwrite = false;

    /**
     * File offset at which to begin transfer.
     * Applies to read mode (downloading) only.
     *
     * Defaults to 0 (Beginning of File).
     *
     * @var int $resume_pos
     */
    public $resume_pos = 0;

    /**
     * Proxy FTP request via http proxy server.
     * Applies to file read operations only.
     * Ex: tcp://squid.example.com:8000.
     *
     * @var string $proxy
     */
    public $proxy;
}