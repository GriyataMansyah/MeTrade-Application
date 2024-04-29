<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\UkuranPetiKemas;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UkuranPetiKemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        UkuranPetiKemas::create([
            "nama"=>'20 - 20 FEET',
            "id_data_master" => $data->id,
        ]);

        UkuranPetiKemas::create([
            "nama"=>'40 - 40 FEET',
            "id_data_master" => $data->id,
        ]);

        UkuranPetiKemas::create([
            "nama"=>'45 - 45 FEET',
            "id_data_master" => $data->id,
        ]);

        UkuranPetiKemas::create([
            "nama"=>'60 - 60 FEET',
            "id_data_master" => $data->id,
        ]);
    }
}
