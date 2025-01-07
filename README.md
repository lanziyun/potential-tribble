# This is my package potential-tribble

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lanziyun/potential-tribble.svg?style=flat-square)](https://packagist.org/packages/lanziyun/potential-tribble)
[![Tests](https://img.shields.io/github/actions/workflow/status/lanziyun/potential-tribble/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/lanziyun/potential-tribble/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/lanziyun/potential-tribble.svg?style=flat-square)](https://packagist.org/packages/lanziyun/potential-tribble)

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require lanziyun/potential-tribble
```

And execute the vendor:publish command, assets will be copied to the specified location.
```bash
php artisan vendor:publish --provider="Lanziyun\PotentialTribble\TranslateServiceProvider"
```

providers.php add
```bash
return [
    ...
    Lanziyun\PotentialTribble\TranslateServiceProvider::class
];
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
