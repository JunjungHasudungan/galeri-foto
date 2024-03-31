<?php

namespace Database\Seeders;

use App\Models\CommentReply;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
                'konten_reply'   => $faker->sentence,
                'like'           => (bool)rand(0, 1),
                'comment_id'     => random_int(1, 6),
                'user_id'        => random_int(1, 6),
                'created_at'    => Carbon::now()->subSeconds(random_int(0, 3600)),
                'updated_at'    => Carbon::now()->subSeconds(random_int(0, 3600)),
            ];
        }

        CommentReply::insert($commentReplies);
    }
}
