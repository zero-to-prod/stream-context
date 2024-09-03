# Zerotoprod\StreamContext

A wrapper for the [`stream_context_create()`](https://www.php.net/manual/en/function.stream-context-create.php) method.

It provides classes that define all the options for this method.

## Installation

To install this package, add it to your composer.json file and run composer install:

```shell
composer require zerotoprod/stream-context
```

## Usage

```php
use Zerotoprod\StreamContext\StreamContext;
use Zerotoprod\StreamContext\DataModels\Options;
use Zerotoprod\StreamContext\DataModels\Ssl;

stream_socket_client(
    'ssl://neverssl.com:443',
    $error_code,
    $error_message,
    30,
    STREAM_CLIENT_CONNECT,
    StreamContext::create([
        StreamContextArgs::Options => [
            Options::ssl => [
                Ssl::peer_name => 'neverssl.com'
            ]
        ],
        StreamContextArgs::params => []
    ])
);
```

## Supported Protocols

- HTTP: Customize request methods, headers, user-agent, and more.
- FTP: Manage file transfers with options like overwrite, resume position, and proxy.
- SSL: Configure SSL/TLS options including peer verification, certificates, and more.
- Phar: Set options like compression and metadata for Phar archives.
- Zip: Handle encrypted Zip files with password options.
- Zlib: Control compression levels for zlib streams.