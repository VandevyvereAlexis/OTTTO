<?php

namespace Database\Seeders;

use App\Models\Critair;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CritairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Critair::insert([
            ['nom' => 1],
            ['nom' => 2],
            ['nom' => 3],
            ['nom' => 4],
            ['nom' => 5],
        ]);
    }
}
