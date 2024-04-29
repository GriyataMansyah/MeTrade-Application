<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\DataJenisLartas;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataJenisLartasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        DataJenisLartas::create([
            "nama"=>"ALAT TELEKOMUNIKASI",
            "id_data_master" => $data->id,
        ]);

        DataJenisLartas::create([
            "nama"=>"OBAT",
            "id_data_master" => $data->id,
        ]);

        DataJenisLartas::create([
            "nama"=>"KOMODITI CITES",
            "id_data_master" => $data->id,
        ]);

        DataJenisLartas::create([
            "nama"=>"KOMODITI WAJIB SNI",
            "id_data_master" => $data->id,
        ]);

        DataJenisLartas::create([
            "nama"=>"BBM",
            "id_data_master" => $data->id,
        ]);

        DataJenisLartas::create([
            "nama"=>"BERAS",
            "id_data_master" => $data->id,
        ]);

        DataJenisLartas::create([
            "nama"=>"BESI BAJA",
            "id_data_master" => $data->id,
        ]);

        DataJenisLartas::create([
            "nama"=>"SENJATA API",
            "id_data_master" => $data->id,
        ]);

        DataJenisLartas::create([
            "nama"=>"BAHAN PANGAN",
            "id_data_master" => $data->id,
        ]);

        DataJenisLartas::create([
            "nama"=>"LAINNYA",
            "id_data_master" => $data->id,
        ]);
    }
}
