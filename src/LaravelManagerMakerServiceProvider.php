<?php

declare(strict_types=1);

namespace LucasLaurens\LaravelManagerMaker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LucasLaurens\LaravelManagerMaker\Commands\CreateManagerFileCommand;
use LucasLaurens\LaravelManagerMaker\Commands\LaravelManagerMakerCommand;
use LucasLaurens\LaravelManagerMaker\Commands\CreateManagerFileContractCommand;

final class LaravelManagerMakerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-manager-maker')
            ->hasConfigFile('manager-maker')
            ->hasCommand(LaravelManagerMakerCommand::class)
            ->hasCommand(CreateManagerFileCommand::class)
            ->hasCommand(CreateManagerFileContractCommand::class)
        ;
    }
}
