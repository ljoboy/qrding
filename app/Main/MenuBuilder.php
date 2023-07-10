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
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => '',
                        'route_name' => 'dashboard',
                        'params' => [
                            'layout' => $layout->value,
                        ],
                        'title' => 'Overview 1'
                    ],
                    'dashboard-overview-2' => [
                        'icon' => '',
                        'route_name' => 'dashboard',
                        'params' => [
                            'layout' => $layout->value,
                        ],
                        'title' => 'Overview 2'
                    ],
                    'dashboard-overview-3' => [
                        'icon' => '',
                        'route_name' => 'dashboard',
                        'params' => [
                            'layout' => $layout->value,
                        ],
                        'title' => 'Overview 3'
                    ],
                    'dashboard-overview-4' => [
                        'icon' => '',
                        'route_name' => 'dashboard',
                        'params' => [
                            'layout' => $layout->value,
                        ],
                        'title' => 'Overview 4'
                    ]
                ]
            ],
            'devider',
        ];
    }
}
