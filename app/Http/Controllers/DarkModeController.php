<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

final class DarkModeController extends Controller
{
    /**
     * Show specified view.
     *
     * @return RedirectResponse
     *
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function switch()
    {
        session([
            'dark_mode' => ! session()->has('dark_mode') || ! session()->get('dark_mode'),
        ]);

        return back();
    }
}
