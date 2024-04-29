<?php

namespace Database\Seeders;

use App\Models\Asuransi;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AsuransiSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        Asuransi::create([
            "nama" => "DALAM NEGERI",
            "id_data_master" => $data->id,
        ]);
        Asuransi::create([
            "nama" => "LUAR NEGERI",
            "id_data_master" => $data->id,
        ]);
    }
}
