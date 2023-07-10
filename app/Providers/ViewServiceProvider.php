<?php

namespace App\Providers;

use App\View\Composers\ColorSchemeComposer;
use App\View\Composers\DarkModeComposer;
use App\View\Composers\LoggedInUserComposer;
use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', MenuComposer::class);
        View::composer('*', DarkModeComposer::class);
        View::composer('*', LoggedInUserComposer::class);
        View::composer('*', ColorSchemeComposer::class);
    }
}
