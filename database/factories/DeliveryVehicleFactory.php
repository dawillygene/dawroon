<?php

namespace Database\Factories;

use App\Models\DeliveryVehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryVehicle>
 */
class DeliveryVehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = DeliveryVehicle::class;
    public function definition(): array
    {
        return [
'vehicle_type' => $this->faker->randomElement(['motorcycle', 'car', 'truck', 'van']), 
            'license_plate' => $this->faker->unique()->regexify('[A-Z]{2}-[0-9]{3}-[A-Z]{2}'), 
            'status' => $this->faker->randomElement(['available', 'in_use', 'under_maintenance']),
        ];
    }
}
