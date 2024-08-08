<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'image_url' => $this->faker->imageUrl(640, 480, 'cats', true), // URL fictícia para a imagem
            'video_url' => $this->faker->url, // URL fictícia para o vídeo
            'image_alt' => $this->faker->sentence,
            'video_thumbnail' => $this->faker->imageUrl(640, 360, 'cats', true), // URL fictícia para a miniatura do vídeo
            'status' => $this->faker->randomElement(['published', 'draft', 'archived']),
        ];
    }
}
