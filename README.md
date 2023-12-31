
# LaraMacro - Laravel Custom Macros

[![Latest Version on Packagist](https://img.shields.io/packagist/v/weward/laramacro.svg?style=flat-square)](https://packagist.org/packages/weward/laramacro)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/weward/laramacro/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/weward/laramacro/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/weward/laramacro/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/weward/laramacro/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/weward/laramacro.svg?style=flat-square)](https://packagist.org/packages/weward/laramacro)

A set of custom macros for Laravel


## Table of Contents
- [Installation](#installation)
- [Usage](#usage)
    - [Response Macro](#response-macro)
        - [jsonApi()](#jsonapi)
-


## Installation

You can install the package via composer:

```bash
# for the meantime
composer require weward/laramacro:dev-master 
```

Publish Service Provider

```bash
php artisan vendor:publish --tag=laramacro-providers
```


You may register the service srovider at `config/app.php` 

```php
'providers' => [

    // ...

    App\Providers\LaraMacroServiceProvider::class,
]

```

## Usage

### Response Macro



### `jsonApi()`

A superset of `->json()` response format that can accept Laravel `Resource` payload.

```php

// Pass normal payload and http status
return response()->jsonApi($data, 200);

// Pass a Resource and hhtp status
return response()->jsonApi(new UserResource($data), 200);

```



## Credits

- [weward](https://github.com/weward)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
