<?php

namespace Database\Factories;

use App\Models\city;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [

            'user_id' => User::factory(),
            'city'    =>$this->faker->city(),
            'Level'   => $this->faker->randomElement(['junior','mid_level','senior']),
        ];
    }
}
