<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\DataEntitas;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataEntitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        DataEntitas::create([
            "nama"=>"1 - Pemilik",
            "id_data_master" => $data->id,
        ]);

        DataEntitas::create([
            "nama"=>"2 - Penanggung Jawab",
            "id_data_master" => $data->id,
        ]);

        DataEntitas::create([
            "nama"=>"3 - Agen",
            "id_data_master" => $data->id,
        ]);

        DataEntitas::create([
            "nama"=>"4 - Tangan Kanan",
            "id_data_master" => $data->id,
        ]);
    }
}
