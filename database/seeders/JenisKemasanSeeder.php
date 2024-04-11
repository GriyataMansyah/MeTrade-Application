<?php

namespace Database\Seeders;

use App\Models\JenisKemasan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisKemasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisKemasan::create([
            "nama"=>"1A - PLASTIC LIMITIC"
        ]);

        JenisKemasan::create([
            "nama"=>"2A - BARREL WOODEN"
        ]);

        JenisKemasan::create([
            "nama"=>"3C - STAINLESS IRONES"
        ]);
    }
}
