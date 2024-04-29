<?php

namespace Database\Seeders;

use App\Models\Komoditi;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KomoditiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        Komoditi::create([
            "nama" => "1 - Migas",
            "id_data_master" => $data->id,
        ]);  

        Komoditi::create([
            "nama" => "2 - Non Migas",
            "id_data_master" => $data->id,
        ]);
    }
}
