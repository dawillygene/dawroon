<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProducerPromotion>
 */
class ProducerPromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id'=> Product::factory(),
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'start_date' => Carbon::now()->subDays(rand(0, 30)), 
            'end_date' => Carbon::now()->addDays(rand(1, 30)), 
            'discount_type' => $this->faker->randomElement(['percentage', 'fixed']),
            'discount_value' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
