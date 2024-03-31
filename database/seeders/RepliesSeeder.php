<?php

namespace Database\Seeders;

use App\Models\Reply;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RepliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $replies = [];

        for ($i=0; $i < 12; $i++) {
            $replies[] = [
                'description'       => $faker->sentence,
                'user_id'           => random_int(1, 6),
                'comment_reply_id'  => random_int(1, 10),
                'created_at'        => Carbon::now()->subSeconds(random_int(0, 3600)),
                'updated_at'        => Carbon::now()->subSeconds(random_int(0, 3600)),
            ];
        }

        Reply::insert($replies);
    }
}
