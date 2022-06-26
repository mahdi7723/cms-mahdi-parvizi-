<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use App\Models\Author;
use App\Models\Comment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
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
            'title'       =>$this->faker->realText(),
            'description' =>$this->faker->realText(),
            'duration'    =>$this->faker->numberBetween(1000,100000),
            'uid'         =>$this->faker->uuid(),
            'release_at'  =>now(),
            'image'      => Arr::random(['user1.jpg', 'user2.jpg', 'user3.jpg', null, null]),
        ];
    }
}
