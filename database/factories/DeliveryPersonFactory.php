<?php

namespace Database\Factories;

use App\Models\DeliveryPerson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryPerson>
 */
class DeliveryPersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = DeliveryPerson::class;
    public function definition(): array
    {
        return [
'name' => $this->faker->name, // Random name
            'phone_number' => $this->faker->unique()->phoneNumber, 
            'email' => $this->faker->unique()->safeEmail, 
            'status' => $this->faker->randomElement(['available', 'busy', 'offline']), 
        ];
    }
}
