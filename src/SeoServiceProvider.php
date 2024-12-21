<?php

namespace Designbycode\Seo;

use Designbycode\Seo\Commands\SeoCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SeoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-seo')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_seo_table')
            ->hasCommand(SeoCommand::class);
    }
}
