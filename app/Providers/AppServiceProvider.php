<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
   public function boot(): void
{
    // Super Admin Gate
    Gate::define('super-admin', function ($user) {
        return $user->role === 'super-admin';
    });

    // Admin Gate
    Gate::define('admin', function ($user) {
        return $user->role === 'admin';
    });

    // Normal User Gate
    Gate::define('user', function ($user) {
        return $user->role === 'user';
    });
}
}
