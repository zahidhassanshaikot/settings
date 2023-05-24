# This [package](https://packagist.org/packages/zahidhassanshaikot/settings) is build for laravel basic settings management. You can add your custom settings using this [package](https://packagist.org/packages/zahidhassanshaikot/settings).


[![Latest Version on Packagist](https://img.shields.io/packagist/v/zahidhassanshaikot/settings.svg?style=flat-square)](https://packagist.org/packages/zahidhassanshaikot/settings)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/zahidhassanshaikot/settings/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/zahidhassanshaikot/settings/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/zahidhassanshaikot/settings/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/zahidhassanshaikot/settings/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zahidhassanshaikot/settings.svg?style=flat-square)](https://packagist.org/packages/zahidhassanshaikot/settings)
[![License](https://img.shields.io/github/license/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub issues](https://img.shields.io/github/issues/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub forks](https://img.shields.io/github/forks/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub stars](https://img.shields.io/github/stars/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub watchers](https://img.shields.io/github/watchers/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub contributors](https://img.shields.io/github/contributors/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub Sponsors](https://img.shields.io/github/sponsors/zahidhassanshaikot?style=flat-square)]()
[![GitHub last commit](https://img.shields.io/github/last-commit/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub pull requests](https://img.shields.io/github/issues-pr/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub closed pull requests](https://img.shields.io/github/issues-pr-closed/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub language count](https://img.shields.io/github/languages/count/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub top language](https://img.shields.io/github/languages/top/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub repo size](https://img.shields.io/github/repo-size/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/zahidhassanshaikot/settings?style=flat-square)]()
[![GitHub repo file count](https://img.shields.io/github/directory-file-count/zahidhassanshaikot/settings?style=flat-square)]()

This [package](https://packagist.org/packages/zahidhassanshaikot/settings) allows you to store settings in a database. The settings are cached to prevent queries to the database. If you update a setting it will be stored in the database and the cache will be flushed.
This [package](https://packagist.org/packages/zahidhassanshaikot/settings) is for managing most basic settings in your laravel application like site title, site logo etc. You can add your custom settings using this package.



## Support us

If you find this project helpful or appreciate my work, please consider buying me a coffee! ☕️

<a href="https://bmc.link/zahidhassanshai" target="_blank">
  <img src="https://img.shields.io/badge/Buy%20Me%20a%20Coffee-orange?style=for-the-badge&logo=buy-me-a-coffee" alt="Buy Me a Coffee">
</a>

## Installation

You can install the package via composer:

```bash
composer require zahidhassanshaikot/settings
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="settings-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="settings-config"
```

This is the contents of the published config file:

```php
return [
    'cache' => [
        'enabled' => true,
    ],
];
```

[//]: # (Optionally, you can publish the views using)

[//]: # ()
[//]: # (```bash)

[//]: # (php artisan vendor:publish --tag="settings-views")

[//]: # (```)


## Usage

### Facade
You can use the facade for shorter code. Add the following to your facades:

```php
use zahidhassanshaikot\Settings\Facades\Settings;

Settings::all();
Settings::updateOrCreate('site_name', 'laravel-settings');
Settings::updateOrCreateMultiple(['site_name' => 'laravel-settings', 'timezone' => 'UTC']);
Settings::get('site_name');
Settings::delete('site_name');

```

[//]: # ()
[//]: # (## Testing)

[//]: # ()
[//]: # (```bash)

[//]: # (composer test)

[//]: # (```)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Zahid Hassan Shaikot](https://github.com/zahidhassanshaikot)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

