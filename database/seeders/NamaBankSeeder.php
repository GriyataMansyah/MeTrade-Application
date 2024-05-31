<?php

namespace Database\Seeders;

use App\Models\NamaBank;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NamaBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();

        NamaBank::create([
                "nama"=>"Bank of Singapore",
                "id_data_master" => $data->id,
            ]);
            NamaBank::create([
                "nama"=>"Development Bank of Singapore",
                "id_data_master" => $data->id,
            ]);
            NamaBank::create([
                "nama"=>"Oversea-Chinese Banking Corporation",
                "id_data_master" => $data->id,
            ]);
            NamaBank::create([
                "nama"=>"United Overseas Bank",
                "id_data_master" => $data->id,
            ]);
            NamaBank::create([
                "nama"=>"Citibank Singapore",
                "id_data_master" => $data->id,
            ]);
            NamaBank::create([
                "nama"=>"Standard Chartered",
                "id_data_master" => $data->id,
            ]);
            NamaBank::create([
                "nama"=>"HSBC Singapore",
                "id_data_master" => $data->id,
            ]);
            
        
    }
}
