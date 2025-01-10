<?php

namespace Database\Factories;

use App\Models\DeliveryArea;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryArea>
 */
class DeliveryAreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = DeliveryArea::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->city, 
            'coverage_area' => json_encode([
            'type' => 'Polygon',
            'coordinates' => [
                    [
                        [$this->faker->longitude, $this->faker->latitude],
                        [$this->faker->longitude, $this->faker->latitude],
                        [$this->faker->longitude, $this->faker->latitude],
                        [$this->faker->longitude, $this->faker->latitude],
                        [$this->faker->longitude, $this->faker->latitude],
                    ],
                ],
            ]), 
            'delivery_fee' => $this->faker->randomFloat(2, 0, 1000), 
        ];
    }
}
