<?php

namespace Database\Seeders;

use App\Models\Marque;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Marque::insert([
            ['nom' => 'Abarth'],
            ['nom' => 'Acura'],
            ['nom' => 'Alfa Romeo'],
            ['nom' => 'Alpina'],
            ['nom' => 'Aston Martin'],
            ['nom' => 'Audi'],
            ['nom' => 'BMW'],
            ['nom' => 'Bristol'],
            ['nom' => 'Bugatti'],
            ['nom' => 'Buick'],
            ['nom' => 'BYD'],
            ['nom' => 'Cadillac'],
            ['nom' => 'Caterham'],
            ['nom' => 'Changan'],
            ['nom' => 'Chevrolet'],
            ['nom' => 'Chrysler'],
            ['nom' => 'Citroën'],
            ['nom' => 'Dacia'],
            ['nom' => 'Dallara'],
            ['nom' => 'Datsun'],
            ['nom' => 'Dodge'],
            ['nom' => 'Ferrari'],
            ['nom' => 'Fiat'],
            ['nom' => 'Ford'],
            ['nom' => 'Genesis'],
            ['nom' => 'Geely'],
            ['nom' => 'GMC'],
            ['nom' => 'Great Wall'],
            ['nom' => 'Honda'],
            ['nom' => 'Hyundai'],
            ['nom' => 'Infiniti'],
            ['nom' => 'Jaguar'],
            ['nom' => 'Jeep'],
            ['nom' => 'Kia'],
            ['nom' => 'Lamborghini'],
            ['nom' => 'Land Rover'],
            ['nom' => 'Lexus'],
            ['nom' => 'Lincoln'],
            ['nom' => 'Lotus'],
            ['nom' => 'Lynk & Co'],
            ['nom' => 'Mazda'],
            ['nom' => 'Mahindra'],
            ['nom' => 'McLaren'],
            ['nom' => 'Mercedes-Benz'],
            ['nom' => 'Mini'],
            ['nom' => 'Mitsubishi'],
            ['nom' => 'Morgan'],
            ['nom' => 'Nissan'],
            ['nom' => 'NIO'],
            ['nom' => 'Pagani'],
            ['nom' => 'Peugeot'],
            ['nom' => 'Pininfarina'],
            ['nom' => 'Polestar'],
            ['nom' => 'Porsche'],
            ['nom' => 'Proton'],
            ['nom' => 'Renault'],
            ['nom' => 'Rolls-Royce'],
            ['nom' => 'Saab'],
            ['nom' => 'Seat'],
            ['nom' => 'Skoda'],
            ['nom' => 'Smart'],
            ['nom' => 'Spyker'],
            ['nom' => 'Subaru'],
            ['nom' => 'Suzuki'],
            ['nom' => 'Tesla'],
            ['nom' => 'Toyota'],
            ['nom' => 'Tata'],
            ['nom' => 'Volkswagen'],
            ['nom' => 'Volvo'],
            ['nom' => 'Wiesmann'],
            ['nom' => 'Xpeng'],
            ['nom' => 'Zenos'],
            ['nom' => 'Autre'],
        ]);
    }
}
