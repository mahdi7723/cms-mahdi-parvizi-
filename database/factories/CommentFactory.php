<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $commentable_id = [
            Video::class,
            Post::class
        ];
        return [

            'message'          => $this->faker->realText(50),
            'commentable_id'   =>$this->faker->numberBetween(1,15),
            'commentable_type' =>$commentable_id[array_rand($commentable_id)],
            'user_id'          => User::factory()->create()->id
        ];
    }
}
