<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'      => 'demo',
                'email'     => 'demo@demo.com',
                'password'  => bcrypt('password'),
                'role_id'   => 3,
                'departement_id'    => 6
            ]
        ];

        User::insert($users);
    }
}
