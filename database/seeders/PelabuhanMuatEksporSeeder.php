<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use App\Models\PelabuhanMuatEkspor;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelabuhanMuatEksporSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        PelabuhanMuatEkspor::create([ 
            "nama" => "IDDAS - BATU AMPAR",
            "id_data_master" => $data->id,
        ]);     

        PelabuhanMuatEkspor::create([
            "nama" => "IDDAJ - BATU AJI",
            "id_data_master" => $data->id,
        ]);  
    }
}
