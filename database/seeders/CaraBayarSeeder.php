<?php

namespace Database\Seeders;

use App\Models\CaraBayar;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CaraBayarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        CaraBayar::create([
            "nama" => "1 - Biasa/Tunai",
            "id_data_master" => $data->id,
        ]);

        CaraBayar::create([
            "nama" => "2 - Berkala",
            "id_data_master" => $data->id,
        ]);

        CaraBayar::create([
            "nama" => "3 - Dengan Jaminan",
            "id_data_master" => $data->id,
        ]);

        CaraBayar::create([
            "nama" => "9 - Gabungan/Lainnya",
            "id_data_master" => $data->id,
        ]);
    }
}
