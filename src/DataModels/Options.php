<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;

/**
 * Options provides a structured way to define stream context options
 * for various protocols like HTTP, FTP, SSL, Phar, Zip, and Zlib.
 *
 * Usage:
 * - Configure stream contexts for different protocols by setting properties like `$http`, `$ftp`, `$ssl`, etc.
 * - Each property corresponds to a specific context option class.
 *
 * Example:
 * ```
 *  Options::new()
 *      ->set_http(
 *          Http::new()
 *              ->set_method('GET')
 *              ->set_header('Content-Type: application/json')
 *          )
 *      ->set_ssl(
 *          Ssl::new()->set_peer_name('example.com')
 *      )
 *      ->set_ftp(
 *          Ftp::new()->set_proxy('ftp://proxy.example.com:8000')
 *      )
 *      ->set_phar(
 *          Phar::new()->set_password('secret')
 *      )
 *      ->set_zip(
 *          Zip::new()->set_password('zip_password')
 *      )
 *      ->set_zlib(
 *          Zlib::new()->set_level(5)
 *      );
 * ```
 *
 * @see https://github.com/zero-to-prod/stream-context
 *
 * @method self set_http(Http $http)
 * @method self set_ftp(Ftp $ftp)
 * @method self set_ssl(Ssl $ssl)
 * @method self set_phar(Phar $phar)
 * @method self set_zip(Zip $zip)
 * @method self set_zlib(Zlib $zlib)
 */
class Options
{
    use DataModel;

    /**
     * HTTP context option listing
     *
     * @see  Http
     * @link https://www.php.net/manual/en/context.http.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public const http = 'http';
    /**
     * FTP context option listing
     *
     * @see Ftp
     * @link https://www.php.net/manual/en/context.ftp.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public const ftp = 'ftp';
    /**
     * SSL context option listing
     *
     * @see Ssl
     * @link https://www.php.net/manual/en/context.ssl.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public const ssl = 'ssl';
    /**
     * Phar context option listing
     *
     * @see Phar
     * @link https://www.php.net/manual/en/context.phar.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public const phar = 'phar';
    /**
     * Zip context option listing
     *
     * @see Zip
     * @link https://www.php.net/manual/en/context.zip.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public const zip = 'zip';
    /**
     * Zlib context option listing
     *
     * @see Zlib
     * @link https://www.php.net/manual/en/context.zlib.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public const zlib = 'zlib';

    /**
     * HTTP context option listing
     *
     * @var Http $http
     * @see  Http
     * @link https://www.php.net/manual/en/context.http.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public $http;
    /**
     * FTP context option listing
     *
     * @var Ftp $ftp
     * @see Ftp
     * @link https://www.php.net/manual/en/context.ftp.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public $ftp;

    /**
     * SSL context option listing
     *
     * @var Ssl $ssl
     * @see Ssl
     * @link https://www.php.net/manual/en/context.ssl.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public $ssl;

    /**
     * Phar context option listing
     *
     * @var Phar $phar
     * @see Phar
     * @link https://www.php.net/manual/en/context.phar.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public $phar;

    /**
     * Zip context option listing
     *
     * @var Zip $zip
     * @see Zip
     * @link https://www.php.net/manual/en/context.zip.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public $zip;

    /**
     * Zlib context option listing
     *
     * @var Zlib $zlib
     * @see Zlib
     * @link https://www.php.net/manual/en/context.zlib.php
     * @see  https://github.com/zero-to-prod/stream-context
     */
    public $zlib;
}
