# Zerotoprod\StreamContext

![](./art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/stream-context)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/stream-context/test.yml?label=tests)](https://github.com/zero-to-prod/stream-context/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/stream-context?color=blue)](https://packagist.org/packages/zero-to-prod/stream-context/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/stream-context?color=f28d1a)](https://packagist.org/packages/zero-to-prod/stream-context)
[![GitHub repo size](https://img.shields.io/github/repo-size/zero-to-prod/stream-context)](https://github.com/zero-to-prod/stream-context)
[![License](https://img.shields.io/packagist/l/zero-to-prod/stream-context?color=red)](https://github.com/zero-to-prod/stream-context/blob/main/LICENSE.md)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/stream-context?branch=main)](https://hitsofcode.com/github/zero-to-prod/stream-context/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
    - [Supported Protocols](#supported-protocols)
- [Local Development](#local-development)
    - [Prerequisites](#prerequisites)
    - [Initializing](#initializing)
    - [Testing](#testing)
    - [Configuration](#configuration)
- [Contributing](#contributing)

## Introduction

A wrapper for the [`stream_context_create()`](https://www.php.net/manual/en/function.stream-context-create.php) method.

It provides classes that define all the options for this method.

## Requirements

- PHP 7.1 or higher.

## Installation

Install `Zerotoprod\StreamContext` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/stream-context
```

This will add the package to your project’s dependencies and create an autoloader entry for it.

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

### Supported Protocols

- HTTP: Customize request methods, headers, user-agent, and more.
- FTP: Manage file transfers with options like overwrite, resume position, and proxy.
- SSL: Configure SSL/TLS options including peer verification, certificates, and more.
- Phar: Set options like compression and metadata for Phar archives.
- Zip: Handle encrypted Zip files with password options.
- Zlib: Control compression levels for zlib streams.

## Local Development

This project provides a convenient [dock](https://github.com/zero-to-prod/dock) script to simplify local development workflows within Docker containers.

You can use this script to initialize the project, manage Composer dependencies, and run tests in a consistent PHP environment.

### Prerequisites

- Docker installed and running
- A `.env` file (created automatically via the `dock init` command, if it doesn’t already exist)

### Initializing

Use the following commands to set up the project:

```shell
sh dock init
sh dock composer update
```

### Testing

This command runs PHPUnit inside the Docker container, using the PHP version specified in your `.env` file.
You can modify or extend this script to include additional tests or commands as needed.

```shell
sh dock test
```

Run the test suite with all versions of php:

```shell
sh test.sh
```

### Configuration

Before starting development, verify that your `.env` file contains the correct settings.

You can specify which PHP version to use for local development, debugging, and Composer operations by updating these variables in your `.env` file:

```dotenv
PHP_VERSION=8.1
PHP_DEBUG=8.1
PHP_COMPOSER=8.1
```

Make sure these values reflect the PHP versions you intend to use.
If the `.env` file does not exist, run the `sh dock init` command to create one from the `.env.example` template.

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/stream-context/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.