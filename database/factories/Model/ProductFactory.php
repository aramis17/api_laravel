<?php

namespace Database\Factories\Model;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(100,1000),
            'stock' => $this->faker->randomDigit,
            'discount' => $this->faker->numberBetween(2, 30)
        ];
    }
}
