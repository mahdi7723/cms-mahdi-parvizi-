<?php

namespace Database\Factories;

use App\Models\Author;
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
    public function definition()
    {
        return [
            'author_id' => Author::all()->random()->id,
            'title'=>$this->faker->text(),
            'slug'=>$this->faker->slug(),
            'main_body'=>$this->faker->paragraph(),
            'status' => $this->faker->randomElement(['draft','published','No show']),
        ];
    }
}
