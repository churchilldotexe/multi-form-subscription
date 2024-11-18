<?php

namespace App\Enums;

enum SubscriptionPlans: string
{
    case ARCADE = 'arcade';
    case ADVANCE = 'advance';
    case PRO = 'pro';

    public function getPrice()
    {
        return match ($this) {
            self::ARCADE => 9,
            self::ADVANCE => 12,
            self::PRO => 15,
        };
    }
}
