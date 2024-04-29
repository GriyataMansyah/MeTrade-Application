<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use App\Models\DataJenisDokumen;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataJenisDokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        DataJenisDokumen::create([
            "nama"=>'380 - INVOICE',
            "id_data_master" => $data->id,
        ]);

        DataJenisDokumen::create([
            "nama"=>'381 - VOICED',
            "id_data_master" => $data->id,
        ]);

        DataJenisDokumen::create([
            "nama"=>'382 - PROTECTED',
            "id_data_master" => $data->id,
        ]);

        DataJenisDokumen::create([
            "nama"=>'383 - SECURED',
            "id_data_master" => $data->id,
        ]);

        DataJenisDokumen::create([
            "nama"=>'384 - PUBLIC',
            "id_data_master" => $data->id,
        ]);
    }
}
