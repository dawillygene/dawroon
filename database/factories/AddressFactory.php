<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Address::class;
    public function definition(): array
    {
        return [
            'address_line1' => $this->faker->streetAddress, 
            'address_line2' => $this->faker->optional()->secondaryAddress,
            'city' => $this->faker->city, 
            'state' => $this->faker->state,
            'zip_code' => $this->faker->postcode, 
            'country' => $this->faker->country,
        ];
    }
}
