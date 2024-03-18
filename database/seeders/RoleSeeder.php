<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name'     => 'Head Master',
                'created_at'    => now(),
            ],
            [
                'name'     => 'Teacher',
                'created_at'    => now(),
            ],
            [
                'name'     => 'Admin',
                'created_at'    => now(),
            ],
            [
                'name'     => 'Staff',
                'created_at'    => now(),
            ],
            [
                'name'     => 'Student',
                'created_at'    => now(),
            ],
        ];

        Role::insert($roles);
    }
}
