<?php

namespace Database\Seeders;

use App\Models\Bank;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankSeeder extends Seeder
{
        public function run(): void
        {
            $this->call(DataMasterSeeder::class);
            $data = DataMaster::first();
            Bank::create([
                "kode_bank" => "BCA",
                "nama_bank"=>"Bank Centrel Asia",
                "id_data_master" => $data->id,
            ]);
            Bank::create([
                "kode_bank" => "BCA",
                "nama_bank"=>"Bank Centrel Asia",
                "id_data_master" => $data->id,
            ]);
        }
}
