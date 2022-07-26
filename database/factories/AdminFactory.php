<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use PersianFaker\PersianFaker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $national_codes = ['0922623456', '0924583456', '0082623456','0890553361','0901122334','0512487545','0892458912'];

        return [
            'user_id' => User::factory(),
            'national_code'=> Arr::random($national_codes),
            'is_active' =>(bool)rand(1,10)<8,
        ];
    }
}
