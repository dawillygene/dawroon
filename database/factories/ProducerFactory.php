<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use App\Models\Producer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producer>
 */
class ProducerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Producer::class;
    public function definition(): array
    {
        return [
            'business_name' => $this->faker->company,
            'contact_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail, 
            'password' => Hash::make('password'), 
            'phone_number' => $this->faker->unique()->phoneNumber, 
            'registration_date' => $this->faker->dateTimeBetween('-1 year', 'now'), 
        ];
    }
}
