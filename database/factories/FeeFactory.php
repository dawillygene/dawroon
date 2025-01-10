<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use App\Models\Producer;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fee>
 */
class FeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'producer_id' => Producer::factory(),
            'order_id' => Order::factory(),
            'fee_amount' => $this->faker->randomFloat(2, 1, 1000), 
            'fee_date' => Carbon::now()->subDays(rand(0, 30)),
        ];
    }
}
