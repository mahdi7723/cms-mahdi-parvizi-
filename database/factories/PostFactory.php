<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use App\Models\Comment;
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
            'author_id'      => Author::inRandomOrder()->first()->id,
            'title'          => $this->faker->realText(50),
            'slug'           => $this->faker->slug(),
            'body'           => $this->faker->realText(),
            'category_id'    => Category::inRandomOrder()->first()->id,
            'status'         => Arr::random(['draft', 'published', 'hidden']),
            'is_commentable' =>$this->faker->boolean(),
            'image'          =>'post'.rand(0,10).'.png',
            'release_at'     =>now()->subMinutes(rand(0, 525600)),
        ];
    }
}
