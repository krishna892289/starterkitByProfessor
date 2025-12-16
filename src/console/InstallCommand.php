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
        $base = dirname(__DIR__, 2); // points to package root

        File::copyDirectory(
            $base.'/stubs/app',
            app_path()
        );

        File::copyDirectory(
            $base.'/stubs/resources',
            resource_path()
        );

        File::copyDirectory(
            $base.'/stubs/routes',
            base_path('routes')
        );

        File::copyDirectory(
            $base.'/stubs/migrations',
            database_path('migrations')
        );
    }


    protected function runMigrations()
    {
        $this->call('migrate');
    }
}
