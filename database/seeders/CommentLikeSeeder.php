<?php

namespace Database\Seeders;

use App\Models\CommentLike;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentLikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $commentLikes = [];

        for ($i=0; $i < 14; $i++) {
            $commentLikes[] = [
                'comment_id'    => random_int(1, 6),
                'user_id'       => random_int(1, 6),
                'like'          => (bool)rand(0, 1),
            ];
        }

        CommentLike::insert($commentLikes);
    }
}
