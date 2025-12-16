<?php

namespace Krishna892289\StarterKit\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command
{
    protected $signature = 'starter-kit:install';
    protected $description = 'Install the Laravel starter kit';

    public function handle()
    {
        $this->info('Installing Starter Kit...');

        $this->copyStubs();
        $this->runMigrations();

        $this->info('Starter Kit installed successfully.');
    }

    protected function copyStubs(): void
    {
        File::copyDirectory(
            __DIR__.'/../../stubs/app',
            app_path()
        );

        File::copyDirectory(
            __DIR__.'/../../stubs/resources',
            resource_path()
        );

        File::copyDirectory(
            __DIR__.'/../../stubs/routes',
            base_path('routes')
        );
    }

    protected function runMigrations()
    {
        $this->call('migrate');
    }
}
