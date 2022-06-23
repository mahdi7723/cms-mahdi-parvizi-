<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Arr;

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

        $cities = ['تهران', 'مشهد', 'اصفهان'];
        return [

            'user_id' => User::all()->random()->id,
            'city'=> Arr::random($cities),
            'Level' => $this->faker->randomElement(['junior','mid_level','senior']),
        ];
    }
}
