<?php

namespace App\Enums;

enum FormSection: string
{
    case INFO = 'info';
    case PLAN = 'plan';
    case ADDONS = 'addons';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
