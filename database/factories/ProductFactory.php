<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'name' => $this->faker->name(),
            'description' => $this->faker->description(),
            'brand' => $this->faker->brand(),
            'category' => $this->faker->category(),
            'price' => $this->faker->price(),
            'color' => $this->faker->color()
        ];
    }
}
