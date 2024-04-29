<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use App\Models\DaerahAsalBarang;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DaerahAsalBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        DaerahAsalBarang::create([
            "nama"=>"Sumatra",
            "id_data_master" => $data->id,
        ]);

        DaerahAsalBarang::create([
            "nama"=>"Jawa",
            "id_data_master" => $data->id,
        ]);

        DaerahAsalBarang::create([
            "nama"=>"Papua",
            "id_data_master" => $data->id,
        ]);

        DaerahAsalBarang::create([
            "nama"=>"Kepulauan Riau",
            "id_data_master" => $data->id,
        ]);

        DaerahAsalBarang::create([
            "nama"=>"Riau",
            "id_data_master" => $data->id,
        ]);

        DaerahAsalBarang::create([
            "nama"=>"Sulawesi",
            "id_data_master" => $data->id,
        ]);

        DaerahAsalBarang::create([
            "nama"=>"Kalimantan",
            "id_data_master" => $data->id,
        ]);
    }
}
