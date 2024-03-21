<?php

namespace Database\Seeders;

use App\Models\ReplyLike;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReplyLikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userLikeReply = [];

        for ($i=0; $i < 16; $i++) { 
            $userLikeReply [] = [
                'comment_reply_id'  => random_int(1, 12),
                'user_id'           => random_int(1, 12),
                'like'      => (bool)rand(0, 1),
            ];
        }

        ReplyLike::insert($userLikeReply);
    }
}
