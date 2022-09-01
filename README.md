<p align="center">Laravel Manager Maker</p>

<p align="center">
    <a href="https://packagist.org/packages/lucaslaurens/laravel-manager-maker">
        <img src="https://img.shields.io/packagist/dt/lucaslaurens/laravel-manager-maker" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/lucaslaurens/laravel-manager-maker">
        <img src="https://img.shields.io/packagist/v/lucaslaurens/laravel-manager-maker" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/lucaslaurens/laravel-manager-maker">
        <img src="https://img.shields.io/packagist/l/lucaslaurens/laravel-manager-maker" alt="License">
    </a>
</p>

## What does it do?

This package adds a new `php artisan make:manager {name}` command. It will create a manager file and its contract (interface).

## Installation

You can install the package via composer:

```bash
composer require lucaslaurens/laravel-manager-maker
```

Or just add the package from the `composer.json` and do a `composer update`:

```json
    {
        "repositories": [
            {
                "type": "vcs",
                "url":  "git@github.com:LucasLaurens/laravel-manager-maker.git"
            }
        ],
        "require": {
            "lucaslaurens/laravel-manager-maker": "^{minimun.release}",
        },
    }
```

## Credits

- [Lucas Laurens](https://github.com/LucasLaurens)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
