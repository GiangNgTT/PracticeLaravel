<?php

namespace Database\Factories;

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
            // 'image' => 'http://localhost:8000/images'(),
            'image' => ' ',
            'description' => $this->faker->paragraph(),
            'model' => $this->faker->name(),
            'produced_on' => now(),
            'mf_id' => rand(1, 10)
        ];
    }
}
