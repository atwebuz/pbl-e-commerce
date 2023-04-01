<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'name'=> $this->faker->name(),
            'quantity'=> $this->faker->numberBetween(1, 100),
            'description' => $this->faker->paragraph(4),
            'price' => $this->faker->numberBetween(1000, 10000) / 100,
            'stock' => $this->faker->numberBetween(10, 100),
        ];
    }
}
