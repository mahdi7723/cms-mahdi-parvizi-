<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['title' => 'technology']);
        Category::create(['title' => 'international']);
        Category::create(['title' => 'religious']);
        Category::create(['title' => 'political']);
        Category::create(['title' => 'economical']);
        Category::create(['title' => 'other']);
    }
}
