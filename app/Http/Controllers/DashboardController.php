<?php

declare(strict_types=1);

namespace App\Http\Controllers;

final class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('dashboard');
    }
}
