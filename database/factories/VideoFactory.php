<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use App\Models\Author;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;
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
            'author_id'   => Author::inRandomOrder()->first()->id,
            'title'       =>$this->faker->sentence,
            'description' =>$this->faker->Text(),
            'image'       =>basename($this->faker->image(storage_path('app/public'))),
            'duration'    =>$this->faker->numberBetween(1000,100000),
            'uid'         =>$this->faker->uuid(),
            'release_at'  =>now(),
        ];
    }
}
