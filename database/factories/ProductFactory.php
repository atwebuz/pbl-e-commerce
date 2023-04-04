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

         //  name, description, price, discount, yearof, millage, transmission, color, oil, condition

    public function definition(): array
    {
        return [
            'name'=> $this->faker->name(),
            'description' => $this->faker->paragraph(4),
            'price' => $this->faker->numberBetween(1000, 10000) / 100,
            'discount' => $this->faker->boolean(),
            'yearof' => $this->faker->date(),
            'millage' => $this->faker->numberBetween(1, 100),
            'quantity'=> $this->faker->numberBetween(1, 100),
            'stock' => $this->faker->numberBetween(10, 100),
        ];
    }
}
