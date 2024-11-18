<?php

namespace App\Traits;

use App\Enums\AddOns;
use App\Enums\FormSection;
use App\Service\PricingServices;

trait HandlesFormSessions
{
    protected function regenerateSession(): void
    {
        session()->regenerate();
    }

    /**
     * @param array<int,mixed> $value
     */
    protected function storeFormSessionData(FormSection $key, array $value): void
    {
        session()->put($key->value, $value);
    }

    protected function clearAllFormSession(): void
    {
        session()->forget(FormSection::values());
    }

    protected function generateSessionData(array $validatedData)
    {
        $billingType = session('plan.billingType') ?? 'monthly';

        return collect($validatedData)
            ->mapWithKeys(function ($value, $key) use ($billingType) {
                return [
                    $key => [
                        'name' => $value,
                        'price' => PricingServices::getPrice(AddOns::tryFrom($value)->getPrice(), $billingType),
                        'billing-type' => $billingType,
                    ]
                ];
            })
            ->toArray();
    }
}
