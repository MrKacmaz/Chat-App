<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case User = 'user';

    public static function values(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}
