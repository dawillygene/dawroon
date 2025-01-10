<?php

namespace Database\Factories;

use App\Models\Deliverie;
use App\Models\Order;
use App\Models\DeliveryPerson;
use App\Models\DeliveryVehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deliverie>
 */
class DeliverieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Deliverie::class;
    public function definition(): array
    {
        return [
          'order_id' => Order::factory(), 
            'delivery_person_id' => DeliveryPerson::factory(),
            'vehicle_id' => DeliveryVehicle::factory(), 
            'estimated_delivery_time' => $this->faker->dateTimeBetween('now', '+1 week'),
            'actual_delivery_time' => $this->faker->optional(0.7)->dateTimeBetween('now', '+1 week'),
            'status' => $this->faker->randomElement(['pending', 'in_transit', 'delivered', 'failed']), 
        ];
    }
}
