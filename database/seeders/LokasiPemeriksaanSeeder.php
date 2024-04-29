<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use App\Models\LokasiPemeriksaan;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LokasiPemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        LokasiPemeriksaan::create([
            "nama"=>'KP TEMPAT PEMUATAN',
            "id_data_master" => $data->id,
        ]);

        LokasiPemeriksaan::create([
            "nama"=>'GUDANG EKSPORTIR',
            "id_data_master" => $data->id,
        ]);

        LokasiPemeriksaan::create([
            "nama"=>'TEMPAT LAIN YANG DI IZINKAN',
            "id_data_master" => $data->id,
        ]);

        LokasiPemeriksaan::create([
            "nama"=>'TPS',
            "id_data_master" => $data->id,
        ]);

        LokasiPemeriksaan::create([
            "nama"=>'TPP',
            "id_data_master" => $data->id,
        ]);

        LokasiPemeriksaan::create([
            "nama"=>'TPB',
            "id_data_master" => $data->id,
        ]);
    }
}
