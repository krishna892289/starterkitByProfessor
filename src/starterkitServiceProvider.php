<?php

namespace Krishna892289\StarterKit;

use Illuminate\Support\ServiceProvider;
use Krishna892289\StarterKit\Console\InstallCommand;

class starterkitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
        $this->publishes([
            __DIR__.'/../stubs' => base_path(),
        ], 'starter-kit');
    }
}
