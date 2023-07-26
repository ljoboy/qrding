<?php

declare(strict_types=1);

namespace App\Enums;

enum GuestType: string
{
    case SINGLE = 'single';
    case COUPLE = 'couple';
    case FAMILY = 'family';
    case GROUP = 'group';

    public static function getValues(): array
    {
        return array_map(fn ($case) => $case->value, self::cases());
    }
}
