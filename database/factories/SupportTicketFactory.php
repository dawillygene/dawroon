<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SupportTicket>
 */
class SupportTicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         'id' => \App\Models\User::factory(),
         'issue_description' => $this->faker->paragraph,
         'status' => $this->faker->randomElement(['open', 'in_progress', 'resolved']),
         'created_date' => Carbon::now()->subDays(rand(0, 30)),
         'resolved_date' => $this->faker->optional(0.5)->dateTimeBetween('-30 days', 'now'),

        ];
    }
}
