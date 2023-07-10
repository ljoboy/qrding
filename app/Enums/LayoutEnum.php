<?php

namespace App\Enums;

enum LayoutEnum
{
    case SIDEMENU;
    case TOPMENU;
    case SIMPLEMENU;

    public static function from(string $layout): LayoutEnum
    {
        return match ($layout) {
            'side-menu' => self::SIDEMENU,
            'top-menu' => self::TOPMENU,
            'simple-menu' => self::SIMPLEMENU,
        };
    }
}
