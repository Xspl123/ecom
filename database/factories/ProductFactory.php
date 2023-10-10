<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'slug' => $this->faker->unique()->slug,
            'short_description' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'regular_price' => $this->faker->randomFloat(2, 10, 1000),
            'SKU' => $this->faker->unique()->bothify('??##??##'),
            'stock_status' => $this->faker->randomElement(['instock', 'outofstock']),
            'featured' => $this->faker->boolean(20), // 20% chance of being true
            'quantity' => $this->faker->numberBetween(1, 100),
            'image' => $this->faker->numberBetween(1, 6) . '.jpg',
            'images' => json_encode([$this->faker->numberBetween(1, 6) . '.jpg', $this->faker->numberBetween(1, 6) . '.jpg']),
            'category_id' => $this->faker->numberBetween(1, 10), // Assuming 10 categories
            'brand_id' => $this->faker->numberBetween(1, 5), // Assuming 5 brands
        ];
    }
}
