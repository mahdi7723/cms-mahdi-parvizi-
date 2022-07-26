<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;
use App\Models\tag;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
            ->count(50)
            ->create()
            ->each(function($Post) {

                //Append Random Comments:
                Comment::factory()->count(rand(0, 5))->create([
                    'commentable_type'=>Post::class,
                    'commentable_id'  => $Post->id,
                    'user_id'         =>User::inRandomOrder()->first()->id,
                ]);

                //Append Random Tags:
                $Post->tags()->sync(
                    tag::inRandomOrder()->limit(rand(0, 3))->pluck('id')
                );

            });
    }
}
