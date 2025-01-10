<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Deliverie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryReview>
 */
class DeliveryReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => User::factory(), // Create a user and use its ID
            'delivery_id' => Deliverie::factory(), // Create a delivery and use its ID
            'rating' => $this->faker->numberBetween(1, 5), // Random rating between 1 and 5
            'review_text' => $this->faker->paragraph, // Random review text
            'review_date' => Carbon::now()->subDays(rand(0, 30)), // Random date within the last 30 days
        ];
    }
}
