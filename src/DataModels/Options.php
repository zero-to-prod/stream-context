<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;

/**
 * StreamContextCreateOptions provides a structured way to define stream context options
 * for various protocols like HTTP, FTP, SSL, Phar, Zip, and Zlib.
 *
 * Usage:
 * - Configure stream contexts for different protocols by setting properties like `$http`, `$ftp`, `$ssl`, etc.
 * - Each property corresponds to a specific context option class.
 *
 * Example:
 * ```php
 * $Options = Options::from([
 *      Options::ssl => [
 *          Ssl::peer_name => $url
 *      ]
 * ]);
 * ```
 */
class Options
{
    use DataModel;

    public const http = 'http';
    public const ftp = 'ftp';
    public const ssl = 'ssl';
    public const phar = 'phar';
    public const zip = 'zip';
    public const zlib = 'zlib';

    /**
     * @var Http $http
     */
    public $http;
    /**
     * @var Ftp $ftp
     */
    public $ftp;

    /**
     * @var Ssl $ssl
     */
    public $ssl;

    /**
     * @var Phar $phar
     */
    public $phar;

    /**
     * @var Zip $zip
     */
    public $zip;

    /**
     * @var Zlib $zlib
     */
    public $zlib;
}
