<?php

namespace Weward\LaraMacro;

use Weward\LaraMacro\Commands\InstallCommand;
use Weward\LaraMacro\PackageServiceProvider;

class LaraMacroServiceProvider extends PackageServiceProvider
{
    protected $packageName = 'laramacro';

    public function boot()
    {
        parent::boot();
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name($this->packageName)
            ->hasResponseMacro()
            ->hasInstallCommand(function (InstallCommand $command, $packageInstance) {
                $command
                ->startWith(function (InstallCommand $command) {
                    $command->info("Installing package {$this->packageName}");
                })

                // ... Commands/InstallCommand

                ->endWith(function (InstallCommand $command) {
                    $command->info("Done installing package {$this->packageName}");
                });
            });
    }
}
