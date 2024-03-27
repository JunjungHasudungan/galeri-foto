<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $likes = [];

        for ($index = 0; $index < 12; $index++) {
            $likes[] = [
                'post_id'   => random_int(1, 6),
                'user_id'   => random_int(1, 6),
                'status'      => (bool)rand(0, 1),
            ];
        }

        Like::insert($likes);
    }
}
