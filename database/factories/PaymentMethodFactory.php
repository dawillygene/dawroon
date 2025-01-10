<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentMethod>
 */
class PaymentMethodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' =>User::factory(), 
            'payment_type' => $this->faker->randomElement(['credit_card', 'debit_card']), 
            'card_number' => $this->faker->creditCardNumber,
            'expiration_date' => $this->faker->creditCardExpirationDateString, 
            'cvv' => $this->faker->numerify('###'),
            'default_payment' => $this->faker->boolean,
        ];
    }
}
