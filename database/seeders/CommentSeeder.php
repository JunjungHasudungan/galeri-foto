<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;
use Carbon\Carbon;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker)
    {
        $comments = [];

        for($index = 0; $index < 12; $index++){
            $comments[] = [
                'konten'        => $faker->sentence, 
                'user_id'       => random_int(1, 6),
                'post_id'       => random_int(1, 6),
                'created_at'    => Carbon::now()->subSeconds(random_int(0, 3600)),
                'updated_at'    => Carbon::now()->subSeconds(random_int(0, 3600)),
            ];
        }

        Comment::insert($comments);
    }
}
