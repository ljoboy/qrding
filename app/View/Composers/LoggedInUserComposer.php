<?php

declare(strict_types=1);

namespace App\View\Composers;

use Illuminate\View\View;

final class LoggedInUserComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('loggedin_user', request()->user());
    }
}
