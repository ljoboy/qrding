<?php

namespace App\View\Composers;

use Illuminate\View\View;

class LoggedInUserComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view): void
    {
        $view->with('loggedin_user', request()->user());
    }
}
