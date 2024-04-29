<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\JenisKemasan;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisKemasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        JenisKemasan::create([
            "nama"=>"1A - PLASTIC LIMITIC",
            "id_data_master" => $data->id,
        ]);

        JenisKemasan::create([
            "nama"=>"2A - BARREL WOODEN",
            "id_data_master" => $data->id,
        ]);

        JenisKemasan::create([
            "nama"=>"3C - STAINLESS IRONES",
            "id_data_master" => $data->id,
        ]);
    }
}
