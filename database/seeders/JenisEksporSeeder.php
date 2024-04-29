<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\JenisEkspor;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisEksporSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        JenisEkspor::create([
            "nama" => "1 - Ekspor Biasa",
            "id_data_master" => $data->id,
        ]);

        JenisEkspor::create([
            "nama" => "2 - Ekspor Re-Import",
            "id_data_master" => $data->id,
        ]);

        JenisEkspor::create([
            "nama" => "3 - Ekspor Re-Ekspor",
            "id_data_master" => $data->id,
        ]); 
    }
}

