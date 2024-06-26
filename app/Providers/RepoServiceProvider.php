<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interface\SettingsRepositoryInterface;
class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            'App\Interface\SettingsRepositoryInterface',
            'App\Repository\SettingsRepository'
        );

        $this->app->bind(
            'App\Interface\UserRepositoryInterface',
            'App\Repository\UserRepository'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
