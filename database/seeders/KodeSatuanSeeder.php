<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\KodeSatuan;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KodeSatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        KodeSatuan::create([
            "nama"=>"KG",
            "id_data_master" => $data->id,
        ]);

        KodeSatuan::create([
            "nama"=>"HG",
            "id_data_master" => $data->id,
        ]);

        KodeSatuan::create([
            "nama"=>"Dag",
            "id_data_master" => $data->id,
        ]);

        KodeSatuan::create([
            "nama"=>"MG",
            "id_data_master" => $data->id,
        ]);

        KodeSatuan::create([
            "nama"=>"DG",
            "id_data_master" => $data->id,
        ]);

        KodeSatuan::create([
            "nama"=>"CG",
            "id_data_master" => $data->id,
        ]);

        KodeSatuan::create([
            "nama"=>"MG",
            "id_data_master" => $data->id,
        ]);
    }
}
