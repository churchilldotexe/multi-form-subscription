<?php

namespace Database\Factories;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AddOn>
 */
class AddOnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Online service',
            'subscriptions' => Subscription::factory(),
            'price' => 2,
            'subscription_type' => 'monthly',
            'start_date' => now(),
            'end_date' => now()->addMonth(),
        ];
    }
}
