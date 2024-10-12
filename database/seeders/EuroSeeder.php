<?php

namespace Database\Seeders;

use App\Models\Euro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EuroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Euro::insert([
            ['nom' => 'Euro_1'],
            ['nom' => 'Euro_2'],
            ['nom' => 'Euro_3'],
            ['nom' => 'Euro_4'],
            ['nom' => 'Euro_5'],
            ['nom' => 'Euro_6'],
        ]);
    }
}
