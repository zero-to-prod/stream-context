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

    /* @see Http */
    public const http = 'http';
    /* @see Ftp */
    public const ftp = 'ftp';
    /* @see Ssl */
    public const ssl = 'ssl';
    /* @see Phar */
    public const phar = 'phar';
    /* @see Zip */
    public const zip = 'zip';
    /* @see Zlib */
    public const zlib = 'zlib';

    /**
     * @var Http $http
     * @see Http
     */
    public $http;
    /**
     * @var Ftp $ftp
     * @see Ftp
     */
    public $ftp;

    /**
     * @var Ssl $ssl
     * @see Ssl
     */
    public $ssl;

    /**
     * @var Phar $phar
     * @see Phar
     */
    public $phar;

    /**
     * @var Zip $zip
     * @see Zip
     */
    public $zip;

    /**
     * @var Zlib $zlib
     * @see Zlib
     */
    public $zlib;
}
