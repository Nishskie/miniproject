<?php

namespace App\Providers;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
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
        //
        
        $currentRoute = Route::current();
        
        if ($currentRoute && $currentRoute->uri() === 'api/customers') {
            $csrfMiddleware = app(VerifyCsrfToken::class);
            $csrfMiddleware->except[] = $currentRoute->uri();
        }
    }
}
