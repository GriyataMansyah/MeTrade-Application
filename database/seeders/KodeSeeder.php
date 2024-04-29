<?php

namespace Database\Seeders;

use App\Models\DataKode;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        DataKode::create([
            "nama"=>"HSD",
            "id_data_master" => $data->id,
        ]);

        DataKode::create([
            "nama"=>"MRF",
            "id_data_master" => $data->id,
        ]);

        DataKode::create([
            "nama"=>"CGF",
            "id_data_master" => $data->id,
        ]);

        DataKode::create([
            "nama"=>"UYT",
            "id_data_master" => $data->id,
        ]);

        DataKode::create([
            "nama"=>"JRE",
            "id_data_master" => $data->id,
        ]);

        DataKode::create([
            "nama"=>"JRT",
            "id_data_master" => $data->id,
        ]);

        DataKode::create([
            "nama"=>"QCR",
            "id_data_master" => $data->id,
        ]);

        DataKode::create([
            "nama"=>"KTE",
            "id_data_master" => $data->id,
        ]);
    }
}
