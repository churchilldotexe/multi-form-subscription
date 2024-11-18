<?php

namespace Database\Factories;

use App\Models\AddOn;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'add_on_id' => AddOn::factory(),
            'name' => 'Advanced',
            'price' => 9,
            'subscription_type' => 'monthly',
            'start_date' => now(),
            'end_date' => now()->addMonth()
        ];
    }
}
