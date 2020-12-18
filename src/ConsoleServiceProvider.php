<?php

namespace Zakmes\Console;

use Illuminate\Support\ServiceProvider;
use Zakmes\Console\Console\Commands\MakeContractCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../config/console.php' => config_path('console.php'),], 'config');
            $this->commands([MakeContractCommand::class]);
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/console.php', 'console');
    }
}
