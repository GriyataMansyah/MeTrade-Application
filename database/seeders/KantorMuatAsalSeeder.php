<?php

namespace Database\Seeders;

use App\Models\JenisEkspor;
use Illuminate\Database\Seeder;
use App\Models\kantor_muat_asal as KantorMuatAsal; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KantorMuatAsalSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KantorMuatAsal::create([ 
            "nama" => "TB000 KPPBC TMP A BATU AMPAR"
        ]);     

        KantorMuatAsal::create([
            "nama" => "TB001 KPPBC TMP B BATU AJI"
        ]);  
    }
}

