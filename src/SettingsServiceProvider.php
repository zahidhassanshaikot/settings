<?php

namespace zahidhassanshaikot\Settings;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use zahidhassanshaikot\Settings\Commands\SettingsCommand;

class SettingsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('settings')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_settings_table')
            ->hasCommand(SettingsCommand::class);
    }
}
