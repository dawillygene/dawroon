<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
             'id'=> User::factory(),
             'order_date'=> $this->faker->dateTimeBetween("-1 year","now"),
             'total_price'=> $this->faker->randomFloat(2,100,10000),
             'delivery_address' => $this->faker->streetAddress . ', ' . $this->faker->city . ', ' . $this->faker->state . ' ' . $this->faker->postcode, 
             'delivery_slot' => $this->faker->time('H:i') . ' - ' . date('H:i', strtotime($this->faker->time('H:i')) + 7200),
             'status' => $this->faker->randomElement(['pending', 'processing', 'completed', 'cancelled']),
            
            ];
    }
}
