<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProducerPayment>
 */
class ProducerPaymentFactory extends Factory
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
            'payment_type' => $this->faker->randomElement(['bank_transfer', 'paypal', 'credit_card']), 
            'account_details' => $this->faker->text(50), 
            'default_payment' => $this->faker->boolean,
        ];
    }
}
