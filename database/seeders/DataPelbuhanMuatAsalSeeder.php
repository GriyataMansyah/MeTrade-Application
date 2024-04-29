<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use App\Models\DataPelabuhanMuatAsal;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataPelbuhanMuatAsalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        DataPelabuhanMuatAsal::create([
            "nama"=>'IDDAS - BATU AMPAR',
            "id_data_master" => $data->id,
        ]);

        DataPelabuhanMuatAsal::create([
            "nama"=>'IDDAJ - BATU AJI',
            "id_data_master" => $data->id,
        ]);
    }
}
