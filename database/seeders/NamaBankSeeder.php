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
            "nama"=>"BCA",
            "id_data_master" => $data->id,
        ]);

        NamaBank::create([
            "nama"=>"BNI",
            "id_data_master" => $data->id,
        ]);

        NamaBank::create([
            "nama"=>"BRI",
            "id_data_master" => $data->id,
        ]);
    }
}
