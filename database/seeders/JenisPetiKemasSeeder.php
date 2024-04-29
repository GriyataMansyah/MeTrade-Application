<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\JenisPetiKemas;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisPetiKemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        JenisPetiKemas::create([
            "nama"=>"4 - EMPTY BOX",
            "id_data_master" => $data->id,
        ]);

        JenisPetiKemas::create([
            "nama"=>"5 - PCC",
            "id_data_master" => $data->id,
        ]);

        JenisPetiKemas::create([
            "nama"=>"6 - LCT",
            "id_data_master" => $data->id,
        ]);
    }
}
