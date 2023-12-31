<?php

declare(strict_types=1);

namespace App\Providers;

use App\View\Composers\DarkModeComposer;
use App\View\Composers\FakerComposer;
use App\View\Composers\LoggedInUserComposer;
use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

final class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', MenuComposer::class);
        View::composer('*', LoggedInUserComposer::class);
        View::composer('*', DarkModeComposer::class);
        View::composer('*', FakerComposer::class);
    }
}
