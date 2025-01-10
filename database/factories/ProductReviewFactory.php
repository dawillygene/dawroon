<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductReview>
 */
class ProductReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => User::factory(), 
            'product_id' => Product::factory(), 
            'rating' => $this->faker->numberBetween(1, 5), 
            'review_text' => $this->faker->paragraph,
            'review_date' => Carbon::now()->subDays(rand(0, 30)),
        ];
    }
}
