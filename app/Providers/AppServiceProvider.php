<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public const HOME = '/';
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
        //
    }

    protected function redirectTo()
    {
        $role = Auth::user()->role_id;

        switch ($role) {
            case '1':
                return 'admin/user';
            case '2':
                return 'seller/user';
            default:
                return 'dashboard/user';
        }
    }
}
