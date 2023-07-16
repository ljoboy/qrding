<?php

declare(strict_types=1);

namespace App\Enums;

enum LayoutEnum: string
{
    case SIDEMENU = 'side-menu';
    case TOPMENU = 'top-menu';
    case SIMPLEMENU = 'simple-menu';
    case LOGIN = 'login';
}
