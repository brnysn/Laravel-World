# The simplest way to add country, state and city to Laravel application.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/brnysn/laravel-world.svg?style=flat-square)](https://packagist.org/packages/brnysn/laravel-world)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/brnysn/laravel-world/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/brnysn/laravel-world/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/brnysn/laravel-world.svg?style=flat-square)](https://packagist.org/packages/brnysn/laravel-world)

The simplest way to add country, state and city to Laravel application.

## Installation

You can install the package via composer:

```bash
composer require brnysn/laravel-world
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="world-migrations"
php artisan migrate
```


After the migration has been published you can add the countries, states and cities to your database by running:

```bash
php artisan db:seed --class="Brnysn\\World\\Database\\Seeders\\WorldSeeder"
```

Add `HasWorldAddress` trait to your models:

```php
use Brnysn\World\Traits\HasWorldAddress;

class {class_name} extends Model
{
    use HasWorldAddress;
}
```

## Usage

```php
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Yasin BARAN](https://github.com/brnysn)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
