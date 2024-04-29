<?php

namespace Database\Seeders;

use App\Models\Bendera;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BenderaSeeder extends Seeder
{
    
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        Bendera::create([
            "nama"=>'ID - INDONESIA',
            "id_data_master" => $data->id,
        ]);
        Bendera::create([
            "nama"=>'SG - SINGAPURA',
            "id_data_master" => $data->id,
        ]);
    }
}
