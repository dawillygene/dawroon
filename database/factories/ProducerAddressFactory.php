<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProducerAddress>
 */
class ProducerAddressFactory extends Factory
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
            'address_line1' => $this->faker->streetAddress, 
            'address_line2' => $this->faker->optional()->secondaryAddress, 
            'city' => $this->faker->city, 
            'state' => $this->faker->state, 
            'zip_code' => $this->faker->postcode, 
            'country' => $this->faker->country,
        ];
    }
}
