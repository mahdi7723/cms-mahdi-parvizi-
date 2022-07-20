<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;
use App\Models\User;
use App\Models\comment;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::factory()
            ->count(20)
            ->create()
            ->each(function($video) {

                comment::factory()->count(rand(0, 3))->create([
                    'commentable_type' => Video::class,
                    'commentable_id'   => $video->id,
                    'user_id'          => User::inRandomOrder()->first()->id,
                ]);

            });
    }
}
