<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Femme>
 */
class FemmeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->sentence(2),
            'price'=>fake()->numberBetween(35,500),
            'desc'=>fake()->paragraph(5),
            'url_img' =>fake()->imageUrl(640, 480, 'persons', true),
        ];
    }
}
