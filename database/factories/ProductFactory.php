<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'stock' => fake()->numberBetween(1,500),
            'product_price'=>fake()->randomNumber(4),
            'image_path'=>null,
            'uploader_id'=>fake()->unique()->numberBetween(1,20),
            'category_id'=>fake()->numberBetween(1,2)
        ];
    }
}
