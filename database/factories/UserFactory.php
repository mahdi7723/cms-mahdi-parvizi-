<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $phone="09".$this->faker->numerify('########');
        return [
            'first_name'            => $this->faker->firstName(),
            'last_name'             => $this->faker->lastName(),
            'avatar'                =>         (rand(1, 10) < 9) ? 'avatar' . rand(0, 10) . '.jpeg' : null,
            'email'                 => $this->faker->unique()->safeEmail(),
            'phone'                 =>$phone,
            'last_login_at'         =>$this->faker->dateTime(),
            'password'              => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token'        => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
