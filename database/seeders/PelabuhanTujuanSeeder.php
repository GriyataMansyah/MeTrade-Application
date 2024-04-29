<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\PelabuhanTujuan;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelabuhanTujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $this->call(DataMasterSeeder::class);
        $data = DataMaster::first();
        PelabuhanTujuan::create([
            "nama"=>'SG - SINGAPURA MENTARI',
            "id_data_master" => $data->id,
        ]);

        PelabuhanTujuan::create([
            "nama"=>'SP - SINGOCANDI',
            "id_data_master" => $data->id,
        ]);

        PelabuhanTujuan::create([
            "nama"=>'AS - SINGOPADON',
            "id_data_master" => $data->id,
        ]);
    }
}
