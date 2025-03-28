<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\User;
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
        Gate::define('isAdmin', function (User $user) {
            if ($user->role === "admin") {
                return redirect(route('admin'));
            } else {
                return redirect(route('home'));
            }
        });
        Gate::define('viewpost', function (User $user, $postview) {
            return $user->id == $postview;
        });
        Gate::define('viewprofile', function (User $user, $profileview) {
            return $user->id === $profileview;
        });
    }
}
