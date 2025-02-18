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
 *  Ssl::new()
 *      ->set_peer_name('example.com')
 *      ->set_verify_peer(true)
 *      ->set_verify_peer_name(true)
 *      ->set_allow_self_signed(false)
 *      ->set_cafile('/path/to/cafile.pem')
 *      ->set_capath('/path/to/capath/')
 *      ->set_local_cert('/path/to/cert.pem')
 *      ->set_local_pk('/path/to/privatekey.pem')
 *      ->set_passphrase('mySecretPassphrase')
 *      ->set_verify_depth(3)
 *      ->set_ciphers('AES256-SHA')
 *      ->set_capture_peer_cert(true)
 *      ->set_capture_peer_cert_chain(true)
 *      ->set_SNI_enabled(true)
 *      ->set_disable_compression(true)
 *      ->set_peer_fingerprint('sha256')
 *      ->set_security_level(2);
 * ```
 *
 * @see https://www.php.net/manual/en/context.ssl.php
 *
 * @method self set_peer_name(string $peer_name) Peer name to be used. If this value is not set, then the name is guessed based on the hostname used when opening the stream.
 * @method self set_verify_peer(bool $verify_peer) Require verification of SSL certificate used.
 * @method self set_verify_peer_name(bool $verify_peer_name) Require verification of peer name.
 * @method self set_allow_self_signed(bool $allow_self_signed) Allow self-signed certificates. Requires verify_peer.
 * @method self set_cafile(string $cafile) Location of Certificate Authority file on local filesystem which should be used with the verify_peer context option to authenticate the identity of the remote peer
 * @method self set_capath(string $capath) If cafile is not specified or if the certificate is not found there, the directory pointed to by capath is searched for a suitable certificate. capath must be a correctly hashed certificate directory.
 * @method self set_local_cert(string $local_cert) Path to local certificate file on filesystem. It must be a PEM encoded file which contains your certificate and private key.
 * @method self set_local_pk(string $local_pk) Path to local private key file on filesystem in case of separate files for certificate (local_cert) and private key.
 * @method self set_passphrase(string $passphrase) Passphrase with which your local_cert file was encoded.
 * @method self set_verify_depth(int $verify_depth) Abort if the certificate chain is too deep.
 * @method self set_ciphers(string $ciphers) Sets the list of available ciphers. The format of the string is described in » ciphers(1).
 * @method self set_capture_peer_cert(bool $capture_peer_cert) If set to true a peer_certificate context option will be created containing the peer certificate.
 * @method self set_capture_peer_cert_chain(bool $capture_peer_cert_chain) If set to true a peer_certificate_chain context option will be created containing the certificate chain.
 * @method self set_SNI_enabled(bool $SNI_enabled) If set to true server name indication will be enabled. Enabling SNI allows multiple certificates on the same IP address.
 * @method self set_disable_compression(bool $disable_compression) If set, disable TLS compression. This can help mitigate the CRIME attack vector.
 * @method self set_peer_fingerprint(string|array $peer_fingerprint) Aborts when the remote certificate digest doesn't match the specified hash.
 * @method self set_security_level(int $security_level) Sets the security level. If not specified the library default security level is used. The security levels are described in » SSL_CTX_get_security_level(3).
 * @link https://github.com/zero-to-prod/stream-context
 */
class Ssl
{
    use DataModel;

    /**
     * Peer name to be used. If this value is not set, then the name is
     * guessed based on the hostname used when opening the stream.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const peer_name = 'peer_name';
    /**
     * Require verification of SSL certificate used.
     *
     * Defaults to true.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const verify_peer = 'verify_peer';
    /**
     * Require verification of peer name.
     *
     * Defaults to true.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const verify_peer_name = 'verify_peer_name';
    /**
     * Allow self-signed certificates. Requires verify_peer.
     *
     * Defaults to false.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const allow_self_signed = 'allow_self_signed';
    /**
     * Location of Certificate Authority file on local filesystem which should
     * be used with the verify_peer context option to authenticate the identity
     * of the remote peer.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const cafile = 'cafile';
    /**
     * If cafile is not specified or if the certificate is not found there,
     * the directory pointed to by capath is searched for a suitable
     * certificate. capath must be a correctly hashed certificate directory.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const capath = 'capath';
    /**
     * Path to local certificate file on filesystem. It must be a PEM encoded
     * file which contains your certificate and private key. It can optionally
     * contain the certificate chain of issuers. The private key also may be
     * contained in a separate file specified by local_pk.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const local_cert = 'local_cert';
    /**
     * Path to local private key file on filesystem in case of separate files
     * for certificate (local_cert) and private key.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const local_pk = 'local_pk';
    /**
     * Passphrase with which your local_cert file was encoded.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const passphrase = 'passphrase';
    /**
     * Abort if the certificate chain is too deep.
     *
     * Defaults to no verification.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const verify_depth = 'verify_depth';
    /**
     * Sets the list of available ciphers. The format of the string is
     * described in » ciphers(1).
     *
     * Defaults to DEFAULT.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const ciphers = 'ciphers';
    /**
     * If set to true a peer_certificate context option will be created
     * containing the peer certificate.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const capture_peer_cert = 'capture_peer_cert';
    /**
     * If set to true a peer_certificate_chain context option will be created
     * containing the certificate chain.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const capture_peer_cert_chain = 'capture_peer_cert_chain';
    /**
     * If set to true server name indication will be enabled. Enabling SNI
     * allows multiple certificates on the same IP address.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const SNI_enabled = 'SNI_enabled';
    /**
     * If set, disable TLS compression. This can help mitigate the CRIME attack vector.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const disable_compression = 'disable_compression';
    /**
     * Aborts when the remote certificate digest doesn't match the specified hash.
     *
     * When a string is used, the length will determine which hashing algorithm
     * is applied, either "md5" (32) or "sha1" (40).
     *
     * When an array is used, the keys indicate the hashing algorithm name and
     * each corresponding value is the expected digest.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const peer_fingerprint = 'peer_fingerprint';
    /**
     * Sets the security level. If not specified the library default security
     * level is used. The security levels are described in » SSL_CTX_get_security_level(3).
     *
     * Available as of PHP 7.2.0 and OpenSSL 1.1.0.
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public const security_level = 'security_level';

    /**
     * Peer name to be used. If this value is not set, then the name is
     * guessed based on the hostname used when opening the stream.
     *
     * @var string $peer_name
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $peer_name;

    /**
     * Require verification of SSL certificate used.
     *
     * Defaults to true.
     *
     * @var bool $verify_peer
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $verify_peer = true;

    /**
     * Require verification of peer name.
     *
     * Defaults to true.
     *
     * @var bool $verify_peer_name
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $verify_peer_name = true;

    /**
     * Allow self-signed certificates. Requires verify_peer.
     *
     * Defaults to false.
     *
     * @var bool $allow_self_signed
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $allow_self_signed = false;

    /**
     * Location of Certificate Authority file on local filesystem which should
     * be used with the verify_peer context option to authenticate the identity
     * of the remote peer.
     *
     * @var string $cafile
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $cafile;

    /**
     * If cafile is not specified or if the certificate is not found there,
     * the directory pointed to by capath is searched for a suitable
     * certificate. capath must be a correctly hashed certificate directory.
     *
     * @var string $capath
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $capath;

    /**
     * Path to local certificate file on filesystem. It must be a PEM encoded
     * file which contains your certificate and private key. It can optionally
     * contain the certificate chain of issuers. The private key also may be
     * contained in a separate file specified by local_pk.
     *
     * @var string $local_cert
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $local_cert;

    /**
     * Path to local private key file on filesystem in case of separate files
     * for certificate (local_cert) and private key.
     *
     * @var string $local_pk
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $local_pk;

    /**
     * Passphrase with which your local_cert file was encoded.
     *
     * @var string $passphrase
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $passphrase;

    /**
     * Abort if the certificate chain is too deep.
     *
     * Defaults to no verification.
     *
     * @var int $verify_depth
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $verify_depth;

    /**
     * Sets the list of available ciphers. The format of the string is
     * described in » ciphers(1).
     *
     * Defaults to DEFAULT.
     *
     * @var string $ciphers
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $ciphers = 'DEFAULT';

    /**
     * If set to true a peer_certificate context option will be created
     * containing the peer certificate.
     *
     * @var bool $capture_peer_cert
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $capture_peer_cert;

    /**
     * If set to true a peer_certificate_chain context option will be created
     * containing the certificate chain.
     *
     * @var bool $capture_peer_cert_chain
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $capture_peer_cert_chain;

    /**
     * If set to true server name indication will be enabled. Enabling SNI
     * allows multiple certificates on the same IP address.
     *
     * @var bool $SNI_enabled
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $SNI_enabled;

    /**
     * If set, disable TLS compression. This can help mitigate the CRIME attack vector.
     *
     * @var bool $disable_compression
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $disable_compression;

    /**
     * Aborts when the remote certificate digest doesn't match the specified hash.
     *
     * When a string is used, the length will determine which hashing algorithm
     * is applied, either "md5" (32) or "sha1" (40).
     *
     * When an array is used, the keys indicate the hashing algorithm name and
     * each corresponding value is the expected digest.
     *
     * @var string|array $peer_fingerprint
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $peer_fingerprint;

    /**
     * Sets the security level. If not specified the library default security
     * level is used. The security levels are described in » SSL_CTX_get_security_level(3).
     *
     * Available as of PHP 7.2.0 and OpenSSL 1.1.0.
     *
     * @var int $security_level
     *
     * @see https://www.php.net/manual/en/context.ssl.php
     * @link https://github.com/zero-to-prod/stream-context
     */
    public $security_level;
}
