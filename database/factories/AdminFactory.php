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

        $national_codes = ['0922623456', '0924583456', '0082623456'];

        return [
            'user_id' => User::all()->random()->id,
            'national_code'=> Arr::random($national_codes),
            'is_active' => Arr::random([true, true, false]),
        ];
    }
}
