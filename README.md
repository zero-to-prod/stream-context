# `Zerotoprod\StreamContext`
[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/stream-context)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/zero-to-prod/stream-context.svg)](https://packagist.org/packages/zero-to-prod/stream-context)
![test](https://github.com/zero-to-prod/stream-context/actions/workflows/phpunit.yml/badge.svg)
![Downloads](https://img.shields.io/packagist/dt/zero-to-prod/stream-context.svg?style=flat-square&#41;]&#40;https://packagist.org/packages/zero-to-prod/stream-context&#41)


A wrapper for the [`stream_context_create()`](https://www.php.net/manual/en/function.stream-context-create.php) method.

It provides classes that define all the options for this method.

## Installation

To install this package run composer install:

```shell
composer require zerotoprod/stream-context
```

## Usage

```php
use Zerotoprod\StreamContext\StreamContext;
use Zerotoprod\StreamContext\DataModels\StreamContextArgs;
use Zerotoprod\StreamContext\DataModels\Options;
use Zerotoprod\StreamContext\DataModels\Ssl;

$client = stream_socket_client(
    'ssl://neverssl.com:443',
    $error_code,
    $error_message,
    30,
    STREAM_CLIENT_CONNECT,
    StreamContext::create(
        StreamContextArgs::new()
            ->set_Options(
                Options::new()->set_ssl(
                    Ssl::new()->set_peer_name('neverssl.com')
                )
            )
    )
);

fclose($client);

// Alternative
StreamContext::from()
    ->set_Options(Options::new()->set_ssl(Ssl::new()->set_peer_name($url)))
    ->create();
```

## Supported Protocols

- HTTP: Customize request methods, headers, user-agent, and more.
- FTP: Manage file transfers with options like overwrite, resume position, and proxy.
- SSL: Configure SSL/TLS options including peer verification, certificates, and more.
- Phar: Set options like compression and metadata for Phar archives.
- Zip: Handle encrypted Zip files with password options.
- Zlib: Control compression levels for zlib streams.