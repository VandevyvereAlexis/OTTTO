<?php

namespace Database\Seeders;


use App\Models\Couleur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouleurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Couleur::insert([
            ['nom' => 'Argent'],
            ['nom' => 'Beige'],
            ['nom' => 'Bleu'],
            ['nom' => 'Blanc'],
            ['nom' => 'Bordeaux'],
            ['nom' => 'Gris'],
            ['nom' => 'Jaune'],
            ['nom' => 'Marron'],
            ['nom' => 'Noir'],
            ['nom' => 'Orange'],
            ['nom' => 'Rose'],
            ['nom' => 'Rouge'],
            ['nom' => 'Vert'],
            ['nom' => 'Violet'],
            ['nom' => 'Autre'],
        ]);
    }
}
