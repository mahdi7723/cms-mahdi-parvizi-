<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use PersianFaker\Fields\LastName;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Admin::factory()
        ->for(User::factory()->state([
            'first_name'  => 'مهدی',
            'last_name'   => 'پرویزی',
            'email'       => 'parvizi@gmail.com',
            'phone'       => '09941329664',
            'password'    => bcrypt('mahdi13792323'),
        ]))->create();

        //سه ادمین بصورت رندوم
        Admin::factory()->count(3)->create();
    }
}
