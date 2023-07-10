<?php

namespace App\Main;

use App\Enums\LayoutEnum;

class MenuBuilder
{
    /**
     * List of side menu items.
     *
     */
    public static function menu(LayoutEnum $layout = LayoutEnum::SIDEMENU): array
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => $layout,
                        ],
                        'title' => 'Overview 1'
                    ],
                    'dashboard-overview-2' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-2',
                        'params' => [
                            'layout' => $layout,
                        ],
                        'title' => 'Overview 2'
                    ],
                    'dashboard-overview-3' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-3',
                        'params' => [
                            'layout' => $layout,
                        ],
                        'title' => 'Overview 3'
                    ],
                    'dashboard-overview-4' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-4',
                        'params' => [
                            'layout' => $layout,
                        ],
                        'title' => 'Overview 4'
                    ]
                ]
            ],
            'devider',
        ];
    }
}
