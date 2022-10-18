<?php

namespace Brnysn\World;

use Brnysn\World\Commands\WorldCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WorldServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-world')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-world_table')
            ->hasCommand(WorldCommand::class);
    }
}
