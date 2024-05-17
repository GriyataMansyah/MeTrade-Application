<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\JenisEkspor;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use App\Models\KantorMuatAsal; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KantorMuatAsalSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        KantorMuatAsal::create([ 
            "nama" => "TB000 KPPBC TMP A BATU AMPAR",
            "id_data_master" => $data->id,
        ]);     

        KantorMuatAsal::create([
            "nama" => "TB001 KPPBC TMP B BATU AJI",
            "id_data_master" => $data->id,
        ]);  
    }
}

