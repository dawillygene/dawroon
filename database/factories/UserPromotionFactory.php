<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserPromotion>
 */
class UserPromotionFactory extends Factory
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
            'promotion_id' => \App\Models\ProducerPromotion::factory(), 
            'applied_to_order_id' => $this->faker->optional()->randomDigitNotNull, 
        ];
    }
}
