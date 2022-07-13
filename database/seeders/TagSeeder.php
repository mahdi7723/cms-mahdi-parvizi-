<?php

namespace Database\Seeders;

use App\Models\tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags=[
            ['lable'=> 'اخبار فوری'],
            ['lable'=> 'ایران'],
            ['lable'=> 'جنجالی'],
            ['lable'=> 'طنز'],
            ['lable'=> 'برنامه نویسی'],
        ];
        tag::insert($tags);
    }
}
