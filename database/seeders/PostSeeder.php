<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;
use Carbon\Carbon;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker)
    {
        $posts = [];
        for($index = 0; $index < 6; $index++) {
            $posts[] =  [
                    'judul'         => $faker->title, 
                    'keterangan'    => $faker->text,
                    'gambar'        => null, 
                    'user_id'       => random_int(1, 6),
                    'created_at'    => Carbon::now()->subSeconds(random_int(0, 3600)),
                    'updated_at'    => Carbon::now()->subSeconds(random_int(0, 3600)),
                ];
        }

        Post::insert($posts);
    }
}
