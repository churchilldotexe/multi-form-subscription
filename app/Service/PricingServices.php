<?php

namespace App\Service;

class PricingServices
{
    public  static function getPrice(int $price, string $billingType): int
    {
        return $billingType === 'yearly' ? $price * 10 : $price;
    }
}
