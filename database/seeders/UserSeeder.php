<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker)
    {
        $users = [];

        for($index = 0; $index < 6; $index++) {
            $users[] = [
                    'name'              => $faker->name,
                    'email'             => $faker->email,
                    'password'          => bcrypt('password'),
                    'role_id'           => random_int(1, 6),
                    'departement_id'    =>  random_int(1, 6),
                    'created_at'        => Carbon::now()->subSeconds(random_int(0, 3600)),
                    'updated_at'        => Carbon::now()->subSeconds(random_int(0, 3600)),
                ];
        }

        User::insert($users);
    }
}
