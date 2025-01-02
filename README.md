# `Zerotoprod\StreamContext`

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/stream-context)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/stream-context/phpunit.yml?label=tests)](https://github.com/zero-to-prod/stream-context/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/stream-context?color=blue)](https://packagist.org/packages/zero-to-prod/stream-context/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/stream-context?color=f28d1a)](https://packagist.org/packages/zero-to-prod/stream-context)
[![GitHub repo size](https://img.shields.io/github/repo-size/zero-to-prod/stream-context)](https://github.com/zero-to-prod/stream-context)
[![License](https://img.shields.io/packagist/l/zero-to-prod/stream-context?color=red)](https://github.com/zero-to-prod/stream-context/blob/main/LICENSE.md)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod//stream-context?branch=main)](https://hitsofcode.com/github/zero-to-prod//stream-context/view?branch=main)

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
use Zerotoprod\StreamContext\DataModels\Options;
use Zerotoprod\StreamContext\DataModels\Http;

$client = stream_socket_client(
    'ssl://neverssl.com:443',
    $error_code,
    $error_message,
    30,
    STREAM_CLIENT_CONNECT,
    StreamContext::create([
        Options::http => [
            Http::method => 'GET',
            Http::header => "Accept-language: en\r\n"."Cookie: foo=bar",
            Http::proxy => 'proxy'
        ],
        ['options']
    ])->context
);

fclose($client);
```

## Supported Protocols

- HTTP: Customize request methods, headers, user-agent, and more.
- FTP: Manage file transfers with options like overwrite, resume position, and proxy.
- SSL: Configure SSL/TLS options including peer verification, certificates, and more.
- Phar: Set options like compression and metadata for Phar archives.
- Zip: Handle encrypted Zip files with password options.
- Zlib: Control compression levels for zlib streams.