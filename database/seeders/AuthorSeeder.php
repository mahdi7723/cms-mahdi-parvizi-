<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory()
        ->for(User::factory()->state([
            'first_name' => 'ارین',
           'last_name'   => 'پرویزی',
            'email'      => 'parvizia@gmail.com',
            'phone'      => '09941329664',
            'password'   => bcrypt('arian13792323'),
        ]))->create();

       //سه ادمین بصورت رندوم
       Author::factory()->count(3)->create();
    }
}
