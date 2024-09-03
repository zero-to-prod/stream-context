<?php

namespace Zerotoprod\StreamContext\DataModels;

use Zerotoprod\StreamContext\Helpers\DataModel;

/**
 * SSL context options — SSL context option listing
 * Context options for `ssl://` and `tls://` transports.
 *
 * Note: Because `ssl://` is the underlying transport for the
 * https:// and `ftps://` wrappers, any context options which
 * apply to `ssl://` also apply to https:// and `ftps://`.
 *
 * Note: For SNI (Server Name Indication) to be available,
 * then PHP must be compiled with OpenSSL 0.9.8j or
 * greater. Use the OPENSSL_TLSEXT_SERVER_NAME to
 * determine whether SNI is supported.
 *
 * Example:
 * ```
 *  Ssl::from([
 *     Ssl::peer_name => 'example.com',
 *     Ssl::verify_peer => true,
 *  ]);
 * ```
 * @see https://www.php.net/manual/en/context.ssl.php
 */
class Ssl
{
    use DataModel;

    public const peer_name = 'peer_name';
    public const verify_peer = 'verify_peer';
    public const verify_peer_name = 'verify_peer_name';
    public const allow_self_signed = 'allow_self_signed';
    public const cafile = 'cafile';
    public const capath = 'capath';
    public const local_cert = 'local_cert';
    public const local_pk = 'local_pk';
    public const passphrase = 'passphrase';
    public const verify_depth = 'verify_depth';
    public const ciphers = 'ciphers';
    public const capture_peer_cert = 'capture_peer_cert';
    public const capture_peer_cert_chain = 'capture_peer_cert_chain';
    public const SNI_enabled = 'SNI_enabled';
    public const disable_compression = 'disable_compression';
    public const peer_fingerprint = 'peer_fingerprint';
    public const security_level = 'security_level';

    /**
     * Peer name to be used. If this value is not set, then the name is
     * guessed based on the hostname used when opening the stream.
     *
     * @var string $peer_name
     */
    public $peer_name;

    /**
     * Require verification of SSL certificate used.
     *
     * Defaults to true.
     *
     * @var bool $verify_peer
     */
    public $verify_peer = true;

    /**
     * Require verification of peer name.
     *
     * Defaults to true.
     *
     * @var bool $verify_peer_name
     */
    public $verify_peer_name = true;

    /**
     * Allow self-signed certificates. Requires verify_peer.
     *
     * Defaults to false.
     *
     * @var bool $allow_self_signed
     */
    public $allow_self_signed = false;

    /**
     * Location of Certificate Authority file on local filesystem which should
     * be used with the verify_peer context option to authenticate the identity
     * of the remote peer.
     *
     * @var string $cafile
     */
    public $cafile;

    /**
     * If cafile is not specified or if the certificate is not found there,
     * the directory pointed to by capath is searched for a suitable
     * certificate. capath must be a correctly hashed certificate directory.
     *
     * @var string $capath
     */
    public $capath;

    /**
     * Path to local certificate file on filesystem. It must be a PEM encoded
     * file which contains your certificate and private key. It can optionally
     * contain the certificate chain of issuers. The private key also may be
     * contained in a separate file specified by local_pk.
     *
     * @var string $local_cert
     */
    public $local_cert;

    /**
     * Path to local private key file on filesystem in case of separate files
     * for certificate (local_cert) and private key.
     *
     * @var string $local_pk
     */
    public $local_pk;

    /**
     * Passphrase with which your local_cert file was encoded.
     *
     * @var string $passphrase
     */
    public $passphrase;

    /**
     * Abort if the certificate chain is too deep.
     *
     * Defaults to no verification.
     *
     * @var int $verify_depth
     */
    public $verify_depth;

    /**
     * Sets the list of available ciphers. The format of the string is
     * described in » ciphers(1).
     *
     * Defaults to DEFAULT.
     *
     * @var string $ciphers
     */
    public $ciphers = 'DEFAULT';

    /**
     * If set to true a peer_certificate context option will be created
     * containing the peer certificate.
     *
     * @var bool $capture_peer_cert
     */
    public $capture_peer_cert;

    /**
     * If set to true a peer_certificate_chain context option will be created
     * containing the certificate chain.
     *
     * @var bool $capture_peer_cert_chain
     */
    public $capture_peer_cert_chain;

    /**
     * If set to true server name indication will be enabled. Enabling SNI
     * allows multiple certificates on the same IP address.
     *
     * @var bool $SNI_enabled
     */
    public $SNI_enabled;

    /**
     * If set, disable TLS compression. This can help mitigate the CRIME attack
     * vector.
     *
     * @var bool $disable_compression
     */
    public $disable_compression;

    /**
     * Aborts when the remote certificate digest doesn't match the specified
     * hash.
     *
     * When a string is used, the length will determine which hashing algorithm
     * is applied, either "md5" (32) or "sha1" (40).
     *
     * When an array is used, the keys indicate the hashing algorithm name and
     * each corresponding value is the expected digest.
     *
     * @var string|array $peer_fingerprint
     */
    public $peer_fingerprint;

    /**
     * Sets the security level. If not specified the library default security
     * level is used. The security levels are described in » SSL_CTX_get_security_level(3).
     *
     * Available as of PHP 7.2.0 and OpenSSL 1.1.0.
     *
     * @var int $security_level
     */
    public $security_level;
}
