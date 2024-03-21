<?php

namespace Database\Seeders;

use App\Models\CommentReply;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $commentReplies = [];

        for ($i=0; $i < 12; $i++) { 
            $commentReplies[] = [
                'konten'        => $faker->sentence,
                'like'          => (bool)rand(0, 1),
                'comment_id'    => random_int(1, 6),
                'user_id'       => random_int(1, 6)
            ];
        }

        CommentReply::insert($commentReplies);
    }
}
