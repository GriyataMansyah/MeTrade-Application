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
                "kode_bank" => "BOS",
                "nama_bank"=>"Bank of Singapore",
                "id_data_master" => $data->id,
            ]);
            Bank::create([
                "kode_bank" => "DBS",
                "nama_bank"=>"Development Bank of Singapore",
                "id_data_master" => $data->id,
            ]);
            Bank::create([
                "kode_bank" => "OCBC",
                "nama_bank"=>"Oversea-Chinese Banking Corporation",
                "id_data_master" => $data->id,
            ]);
            Bank::create([
                "kode_bank" => "UOB",
                "nama_bank"=>"United Overseas Bank",
                "id_data_master" => $data->id,
            ]);
            Bank::create([
                "kode_bank" => "CS",
                "nama_bank"=>"Citibank Singapore",
                "id_data_master" => $data->id,
            ]);
            Bank::create([
                "kode_bank" => "SC",
                "nama_bank"=>"Standard Chartered",
                "id_data_master" => $data->id,
            ]);
            Bank::create([
                "kode_bank" => "HSBCS",
                "nama_bank"=>"HSBC Singapore",
                "id_data_master" => $data->id,
            ]);
            
        }
}
