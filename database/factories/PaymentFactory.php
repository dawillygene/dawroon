<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Payment::class;


    
    public function definition(): array
    {
        return [
            'order_id' => Order::Factory(),
            'payment_method'=> $this->faker->randomElement(['credit_card', 'paypal', 'bank_transfer', 'cash_on_delivery', 'stripe', 'apple_pay', 'google_pay']),
            'transactsion_id'=> $this->faker->unique()->uuid(),
            'amount'=> $this->faker->randomFloat(2,100,5000000),
            'payment_date'=> $this->faker->dateTimeBetween('-4 year','now'),
            'status'=> $this->faker->randomElement(['pending', 'completed', 'failed']),
            
        ];
    }
}
