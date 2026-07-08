<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [ 
            'title' => fake()->streetName(),
            'user_id' => User::factory(),
            'type'=> fake()->numberBetween(0,8),
            'description' => fake()->paragraph(),
            'location' => fake()->locale(),
            'imageUrl' => fake()->imageUrl(),
            'date' => fake()->date()
        ];
    }
}
