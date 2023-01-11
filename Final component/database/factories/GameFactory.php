<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'console' => $this->faker->name,
            'title' => $this->faker->name,
            'pegi' =>$this->faker->numberBetween(5,100),
            'price' =>$this->faker->numberBetween(5,100),
        ];
    }
}
