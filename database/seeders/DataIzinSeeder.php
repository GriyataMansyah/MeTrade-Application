<?php

namespace Database\Seeders;

use App\Models\DataIzin;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataIzinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        DataIzin::create([
            "nama"=>"Izin Ekspor",
            "id_data_master" => $data->id,
        ]);

        DataIzin::create([
            "nama"=>"Izin Lartas",
            "id_data_master" => $data->id,
        ]);

        DataIzin::create([
            "nama"=>"Izin Edar",
            "id_data_master" => $data->id,
        ]);

        DataIzin::create([
            "nama"=>"Izin Navigasi",
            "id_data_master" => $data->id,
        ]);

        DataIzin::create([
            "nama"=>"Izin Fungsi Ganda",
            "id_data_master" => $data->id,
        ]);
    }
}
