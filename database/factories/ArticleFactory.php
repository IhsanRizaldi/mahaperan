<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'tags_id' => 1,
            'title_article' => fake()->sentence(),
            'slug' => fake()->unique()->slug(),
            'image_article' => '/gambar/logo.png',
            'description_article' => fake()->sentence(),
        ];
    }
}
