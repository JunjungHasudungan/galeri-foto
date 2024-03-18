<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dapartements = [
            [
                'name'          => 'Keuangan',
                'created_at'    => now()
            ],
            [
                'name'          => 'TK',
                'created_at'    => now()
            ],
            [
                'name'          => 'SD',
                'created_at'    => now()
            ],
            [
                'name'          => 'SMP',
                'created_at'    => now()
            ],
            [
                'name'          => 'SMA',
                'created_at'    => now()
            ],
            [
                'name'          => 'SMK',
                'created_at'    => now()
            ],
            [
                'name'          => 'CS',
                'created_at'    => now()
            ],
        ];

        Departement::insert($dapartements);
    }
}
