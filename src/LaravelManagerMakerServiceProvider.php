<?php

namespace LucasLaurens\LaravelManagerMaker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LucasLaurens\LaravelManagerMaker\Commands\LaravelManagerMakerCommand;

class LaravelManagerMakerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-manager-maker')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-manager-maker_table')
            ->hasCommand(LaravelManagerMakerCommand::class);
    }
}
