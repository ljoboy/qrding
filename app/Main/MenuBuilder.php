<?php

declare(strict_types=1);

namespace App\Main;

use App\Enums\LayoutEnum;

final class MenuBuilder
{
    /**
     * List of side menu items.
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
