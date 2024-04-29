<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\JenisDagang;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisDagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        JenisDagang::create([
            "nama" => "1 - Biasa",
            "id_data_master" => $data->id,
        ]);

        JenisDagang::create([
            "nama" => "2 - Imbal Dagang",
            "id_data_master" => $data->id,
        ]);

        JenisDagang::create([
            "nama" => "15 - Lainnya",
            "id_data_master" => $data->id,
        ]); 
    }
}
