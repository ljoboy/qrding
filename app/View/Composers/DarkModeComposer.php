<?php

declare(strict_types=1);

namespace App\View\Composers;

use Illuminate\View\View;

final class DarkModeComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with(
            'dark_mode',
            session()->has('dark_mode') ? filter_var(session('dark_mode'), FILTER_VALIDATE_BOOLEAN) : false
        );
    }
}
