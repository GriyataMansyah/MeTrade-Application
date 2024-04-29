<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use App\Models\CaraPengangkutan;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CaraPengangkutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        CaraPengangkutan::create([
            "nama" => "1 - LAUT",
            "id_data_master" => $data->id,
        ]);

        CaraPengangkutan::create([
            "nama" => "2 - UDARA",
            "id_data_master" => $data->id,
        ]);
    }
}
