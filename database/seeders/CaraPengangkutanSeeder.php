<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CaraPengangkutan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CaraPengangkutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CaraPengangkutan::create([
            "nama" => "1 - LAUT"
        ]);

        CaraPengangkutan::create([
            "nama" => "2 - UDARA"
        ]);
    }
}
