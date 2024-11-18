<?php

namespace App\Enums;

enum AddOns: string
{
    case SERVICE = 'onlineService';
    case STORAGE = 'largerStorage';
    case PROFILE = 'customProfile';

    public function getPrice()
    {
        return match ($this) {
            self::SERVICE => 1,
            self::STORAGE => 2,
            self::PROFILE => 2,
        };
    }
}
