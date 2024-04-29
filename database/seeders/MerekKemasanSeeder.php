<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\MerekKemasan;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MerekKemasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        MerekKemasan::create([
            "nama"=>"IDF",
            "id_data_master" => $data->id,
        ]);

        MerekKemasan::create([
            "nama"=>"AMM",
            "id_data_master" => $data->id,
        ]);

        MerekKemasan::create([
            "nama"=>"SNI",
            "id_data_master" => $data->id,
        ]);
    }
}
