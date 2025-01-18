<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use App\Models\Producer;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
 
    protected $model = Product::class;
    public function definition(): array
    {
        $brands = ['Apple', 'Samsung', 'Nike', 'Adidas', 'Sony', 'Bose', 'Dell', 'HP', 'Canon', 'Logitech'];
        $productTypes = ['Smartphone', 'Laptop', 'Headphones', 'Sneakers', 'Camera', 'Printer', 'Keyboard', 'Monitor', 'Tablet', 'Smartwatch'];
        $features = ['Pro', 'Max', 'Air', 'Ultra', 'Lite', 'Elite', 'Gaming', 'Wireless', 'Bluetooth', '4K', 'HD', 'Waterproof'];
        
        return [
            'producer_id' => Producer::factory(),
            'category_id' => Category::factory(),
            'name' => $this->faker->randomElement($brands) . ' ' . $this->faker->randomElement($productTypes) . ' ' . $this->faker->randomElement($features) . ' ' . $this->faker->numberBetween(1, 15),
            'description' => $this->faker->realText(200),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'image_url' => $this->faker->optional()->imageUrl(640, 480, 'products', true),
            'stock_quantity' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->randomElement(['pending', 'processing', 'completed', 'cancelled']),
        ];
    }
}