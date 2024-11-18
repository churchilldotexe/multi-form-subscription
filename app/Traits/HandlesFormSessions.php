<?php

namespace App\Traits;

use App\Enums\FormSection;

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
}
