# larafire

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This package provides some Artisan commands to help automate Blackfire.io profiling.

## Install

Via Composer

``` bash
$ composer require browner12/larafire
```

## Setup

Add the service provider to the providers array in `config/app.php`.

``` php
'providers' => [
    Larafire\LarafireServiceProvider::class,
];
```

## Publishing

You can publish everything at once

``` php
php artisan vendor:publish --provider="Larafire/LarafireServiceProvider"
```

or you can publish groups individually.

``` php
php artisan vendor:publish --provider="Larafire/LarafireServiceProvider" --tag="config"
```

## Configuration

In `config/larafire.php` add all of the URLs you wish to profile to the `profiled_urls` option.

## Usage

The main command for Larafire is `Profile`. `Profile` triggers a Blackfire profile for all of your `profiled_urls`.

``` sh
php artisan larafire:profile
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email browner12@gmail.com instead of using the issue tracker.

## Credits

- [Andrew Brown][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/browner12/larafire.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/browner12/larafire/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/browner12/larafire.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/browner12/larafire.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/browner12/larafire.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/browner12/larafire
[link-travis]: https://travis-ci.org/browner12/larafire
[link-scrutinizer]: https://scrutinizer-ci.com/g/browner12/larafire/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/browner12/larafire
[link-downloads]: https://packagist.org/packages/browner12/larafire
[link-author]: https://github.com/browner12
[link-contributors]: ../../contributors
