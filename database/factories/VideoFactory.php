<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'author_id' => Author::all()->id,
            'title' =>$this->faker->sentence,
            'description' =>$this->faker->realText,
            'duration'    =>$this->faker->numberBetween(1000,100000),
            'release_at'  =>now(),
            'uid'         =>$this->faker->uuid,
        ];
    }
}
