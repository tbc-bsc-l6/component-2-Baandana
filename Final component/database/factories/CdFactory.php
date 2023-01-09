<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cd>
 */
class CdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'artist' => $this->faker->name,
            'title' => $this->faker->name,
            'duration' =>$this->faker->numberBetween(5,100),
            'price' =>$this->faker->numberBetween(5,100),
        ];
    }
}
