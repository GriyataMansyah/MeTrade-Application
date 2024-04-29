<?php

namespace Database\Seeders;

use App\Models\Curah;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        Curah::create([
            "nama" => "1 - Curah",
            "id_data_master" => $data->id,
        ]);

        Curah::create([
            "nama" => "2 - Non Curah",
            "id_data_master" => $data->id,
        ]);
    }
}
