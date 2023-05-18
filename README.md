# This package is build for laravel basic settings management. You can add your custom settings using this package.


[![Latest Version on Packagist](https://img.shields.io/packagist/v/zahidhassanshaikot/settings.svg?style=flat-square)](https://packagist.org/packages/zahidhassanshaikot/settings)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/zahidhassanshaikot/settings/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/zahidhassanshaikot/settings/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/zahidhassanshaikot/settings/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/zahidhassanshaikot/settings/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zahidhassanshaikot/settings.svg?style=flat-square)](https://packagist.org/packages/zahidhassanshaikot/settings)

This package allows you to store settings in a database. The settings are cached to prevent queries to the database. If you update a setting it will be stored in the database and the cache will be flushed.
This package is for managing most basic settings in your laravel application like site title, site logo etc. You can add your custom settings using this package.


[//]: # ()
[//]: # (## Support us)

[//]: # ()
[//]: # ([<img src="https://github-ads.s3.eu-central-1.amazonaws.com/settings.jpg?t=1" width="419px" />]&#40;https://spatie.be/github-ad-click/settings&#41;)

[//]: # ()
[//]: # (We invest a lot of resources into creating [best in class open source packages]&#40;https://spatie.be/open-source&#41;. You can support us by [buying one of our paid products]&#40;https://spatie.be/open-source/support-us&#41;.)

[//]: # ()
[//]: # (We highly appreciate you sending us a postcard from your hometown, mentioning which of our package&#40;s&#41; you are using. You'll find our address on [our contact page]&#40;https://spatie.be/about-us&#41;. We publish all received postcards on [our virtual postcard wall]&#40;https://spatie.be/open-source/postcards&#41;.)

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
