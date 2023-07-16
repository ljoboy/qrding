<?php

namespace App\Main;

use App\Enums\LayoutEnum;

class MenuBuilder
{
    /**
     * List of side menu items.
     *
     */
    public static function menu(LayoutEnum $layout): array
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'route_name' => 'dashboard',
                'params' => [
                    'layout' => $layout->value,
                ],
            ],
            'devider',
        ];
    }
}
