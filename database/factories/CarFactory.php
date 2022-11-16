<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'model' => fake()->randomElement(['Alfa Romeo', 'Ferrari', 'McLaren']),
            'brand' => fake()->firstNameFemale(),
            'year'=> fake()->numberBetween(1990, 2022),
            'max_speed'=> fake()->numberBetween($min = 0, $max = 400),
            'is_automatic'=> fake()->boolean(),
            'engine'=> fake()->randomElement(['diesel', 'electric', 'petrol', 'hybird']),
            'number_of_doors'=> fake()->numberBetween(2, 10)
        ];
    }
}
