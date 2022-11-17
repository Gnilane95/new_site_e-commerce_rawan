<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostBlog>
 */
class PostBlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> fake()->sentence(3),
            'subtitle'=>fake()->sentence(5),
            'content' => fake()->paragraph(8),
            'author' => fake()->name(),
            'url_img' => fake()->imageUrl(640, 480, 'persons', true),
        ];
    }
}
