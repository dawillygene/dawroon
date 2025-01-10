<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnalyticsData>
 */
class AnalyticsDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'date' => Carbon::today()->subDays(rand(0,365)),
           'metric_type'=>$this->faker->randomElement(['sales', 'visitors', 'conversion_rate']),
           'value'=> $this->faker->randomFloat(2,0,10000)
        ];
    }
}
