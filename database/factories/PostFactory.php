<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

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
    public function definition()
    {
        return [
            'author_id' => Author::all()->random()->id,
            'title' => $this->faker->realText(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraph(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'status' => Arr::random(['draft', 'published', 'hidden']),
        ];
    }
}
