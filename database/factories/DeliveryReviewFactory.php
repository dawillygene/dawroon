<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Delivery;
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
         'id' => \App\Models\User::factory(),
            'delivery_id' => Delivery::factory(),
            'rating' => $this->faker->numberBetween(1, 5), 
            'review_text' => $this->faker->paragraph, 
            'review_date' => Carbon::now()->subDays(rand(0, 30)),
        ];
    }
}
