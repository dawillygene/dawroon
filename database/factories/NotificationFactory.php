<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'recipient_id' => User::factory(), 
            'recipient_type' => User::class,
            'message' => $this->faker->sentence,
            'sent_date' => Carbon::now()->subDays(rand(0, 30)), 
            'read_status' => $this->faker->boolean,
        ];
    }
}
