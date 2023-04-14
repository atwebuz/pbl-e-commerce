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
            'brands_id' => $this->faker->numberBetween(1, 15),
            'categories_id' => $this->faker->numberBetween(1, 3),
            'name'=> $this->faker->name(),
            'description' => $this->faker->paragraph(4),
            'price' => $this->faker->numberBetween(1000, 10000) / 100,
            'discount' => $this->faker->boolean(),
            'date_of_year' => $this->faker->date(),
            'millage' => $this->faker->numberBetween(0, 200000),
            'body_type' => $this->faker->randomElement(['Sedan','Coupe','Hatchback','SUV','Van','Convertible','Wagon','Truck','Sports']),
            // 'category' => $this->faker->randomElement(['Car','Moto','Kamaz']),
            'transmission' => $this->faker->randomElement(['Manual', 'Automatic', 'Electic', 'Other']),
            'color' => $this->faker->randomElement(['white', 'blue', 'black', 'gray']),
            'oil_type' => $this->faker->randomElement(['gasoline', 'gas', 'methane', 'electron', 'diesel']),
            'address' => $this->faker->randomElement(['Sergeli', 'Chilonzor', 'Yunsobod', 'Qoraqamish', 'Yangi Hayot']),
            'condition' => $this->faker->randomElement(['Excellent', 'Good', 'Normal', 'Poor']),
            'user_name' => $this->faker->randomElement(['John', 'Frank', 'Martin', 'User']),
            'user_number' => $this->faker->randomElement(['+9985568455', '+9982368255', '+9981235912', '+9985568488']),
            'created_at' => $this->faker->date(),
            'quantity'=> $this->faker->numberBetween(1, 100),
            'stock' => $this->faker->numberBetween(10, 100),
        ];
    }
}
 
