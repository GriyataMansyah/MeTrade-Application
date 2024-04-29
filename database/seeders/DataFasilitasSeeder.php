<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\DataFasilitas;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataFasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        DataFasilitas::create([
            "nama"=>"Jalur Prioritas",
            "id_data_master" => $data->id,
        ]);

        DataFasilitas::create([
            "nama"=>"Jalur Hijau",
            "id_data_master" => $data->id,
        ]);

        DataFasilitas::create([
            "nama"=>"Jalur Kuning",
            "id_data_master" => $data->id,
        ]);

        DataFasilitas::create([
            "nama"=>"Jalur Merah",
            "id_data_master" => $data->id,
        ]);

        DataFasilitas::create([
            "nama"=>"Vooruitslag",
            "id_data_master" => $data->id,
        ]);
    }
}
