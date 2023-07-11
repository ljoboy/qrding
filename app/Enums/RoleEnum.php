<?php

namespace App\Enums;

enum RoleEnum: string
{
    case Admin = 'admin';
    case User = 'user';
    case SuperAdmin = 'super-admin';

    public static function getValues(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}
