<?php

namespace Database\Seeders;

use App\Models\MerekKemasan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MerekKemasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MerekKemasan::create([
            "nama"=>"IDF"
        ]);

        MerekKemasan::create([
            "nama"=>"AMM"
        ]);

        MerekKemasan::create([
            "nama"=>"SNI"
        ]);
    }
}
