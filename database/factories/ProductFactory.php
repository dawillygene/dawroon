<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use App\Models\Producer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;
    public function definition(): array
    {
        return [
            'producer_id' => Producer::factory(), 
            'category_id' => Category::factory(), 
            'name' => $this->faker->words(3, true), 
            'description' => $this->faker->paragraph, 
            'price' => $this->faker->randomFloat(2, 10, 1000), 
            'image_url' => $this->faker->optional()->imageUrl(), 
            'stock_quantity' => $this->faker->numberBetween(0, 100), 
        ];
    }
}
