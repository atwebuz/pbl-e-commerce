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
            'condition' => $this->faker->randomElement(['Excellent', 'Good', 'Normal', 'Poor']),
            'transmission' => $this->faker->randomElement(['Manual', 'Automatic', 'Electic', 'Other']),
            'color' => $this->faker->randomElement(['white', 'blue', 'black', 'gray']),
            'oil' => $this->faker->randomElement(['gasoline', 'gas', 'methane', 'electron', 'diesel']),
            'body_type' => $this->faker->randomElement(['Sedan','Coupe','Hatchback','SUV','Van','Convertible','Wagon','Truck','Sports']),
            'millage' => $this->faker->numberBetween(0, 200000),
            'quantity'=> $this->faker->numberBetween(1, 100),
            'stock' => $this->faker->numberBetween(10, 100),
        ];
    }
}

