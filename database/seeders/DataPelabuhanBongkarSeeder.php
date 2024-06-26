<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use App\Models\PelabuhanBongkar;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataPelabuhanBongkarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        PelabuhanBongkar::create([
            "nama"=>'POS - Port Of Singapore',
            "id_data_master" => $data->id,
        ]);

        PelabuhanBongkar::create([
            "nama"=>'JP - Jurong Port',
            "id_data_master" => $data->id,
        ]);

        PelabuhanBongkar::create([
            "nama"=>'KH - Keppel Harbour',
            "id_data_master" => $data->id,
        ]);
    }
}
